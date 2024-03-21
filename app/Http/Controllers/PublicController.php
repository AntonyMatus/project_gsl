<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Projects;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index()
    {
        $projects = Projects::latest()->take(6)->get();
        return view('pages.index', ['projects' => $projects]);
    }

    public function projects()
    {
        $projects = Projects::orderBy('publish_date', 'desc')->paginate(2)->withQueryString();
        return view('pages.projects', compact('projects'));
    }

    public function single_project($slug)
    {
        $project = Projects::where('slug', $slug)->first(); 
        $related_project = Projects::select('*')->inRandomOrder()->take(2)->get();
        return view('pages.single_project', ['project' => $project, 'related_projects' => $related_project]);
    }

    public function send_contact_mail(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'company' => ['required', 'string'],
            'email' => ['required', 'string', 'email',],
            'property_type' => ['required', 'string']
        ]);

        /*
            Mail::to('antonyrebolledo@gmail.com')->send(new ContactMail($request));
            return response()->json([
                'ok' => true,
                'message' => 'EL email fue Enviado con exito'
            ], 201); 
        */

        try { 

            $g_recaptcha_response = $request['g-recaptcha-response'];
            $h_captcha_response = $request['h-captcha-response'];

            if($g_recaptcha_response === null || $h_captcha_response === null) {
                return response()->json([
                    'ok' => false,
                    'message' => 'Debes completar el captcha'
                ], 400);
            }

            $hcaptcha_api_url = env('HCAPTCHA_API_URL');
            $secret_key = env('HCAPTCHA_SECRET');
            $verify_captcha_response = Http::timeout(240)->post($hcaptcha_api_url, [
                'secret' => $secret_key,
                'response' => $h_captcha_response
            ]);

            if($verify_captcha_response->status() !== 200) {
                return response()->json([
                    'ok' => false,
                    'message' => 'Ocurrio un error al revisar el captcha, intentalo de nuevo'
                ], 400);
            } 

            Mail::to('jesusrubi.adm@gmail.com')->send(new ContactMail($request));

            /* jesusrubi.adm@gmail.com */
            return response()->json([
                'ok' => true,
                'message' => 'EL email fue Enviado con exito'
            ], 201); 

        } catch (Exception $e) {
            return response()->json([
                'ok' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function test_send_email() {
        Mail::to('jesusrubi.adm@gmail.com')->send(new ContactMail([
            'name' => 'Tony',
            'phone' => '123456789',
            'company' => 'GSL',
            'email' => 'prueba@prueba.com',
            'property_type' => 'Casa'
        ]));

        return "Mensaje enviado";
    }


}
