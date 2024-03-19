<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ExtraImage;
use App\Models\Projects;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects =  Projects::all();
        return view('pages.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'title' => ['required', 'string'],
            'publish_date' => ['required', 'string'],
            'status' => ['required', 'boolean'],
            'body' => ['required', 'string'],
            'images' => ['required']
        ]);
        

            $newProject = new Projects();
            $newProject->title = $request->title;
            $newProject->body = $request->body;
            $newProject->publish_date = $request->publish_date;
            $newProject->status = $request->status;

            $newProject->save();
            

            if($request->hasfile('images')) {
                foreach($request->file('images') as $key => $file) {
                    $filename = $this->storeFile($file, 'blogs');
                    $image = new ExtraImage();
                    $image->project_id = $newProject->id;
                    $image->filename = $filename;
                    $image->save();

                    if ($key === 0) {
                        Projects::where('id', $newProject->id)->update(['cover_image' => $filename]);
                    }
                }
            }
            
            $projects =  Projects::all();
            return view('pages.projects.index', ['projects' => $projects]);
            
    }

    
    public function edit(string $id)
    {
        $proyecto = Projects::find($id);
        return view('pages.projects.edit',compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'title' => ['required', 'string'],
            'publish_date' => ['required', 'string'],
            'status' => ['required', 'boolean'],
            'body' => ['required', 'string']
        ]);

    $project = Projects::find($id);
        $project->title = $request->title;
        $project->body = $request->body;
        $project->publish_date = $request->publish_date;
        $project->status = $request->status;
        $project->save();

        if($request->hasfile('images')) {
                foreach($request->file('images') as $key => $file) {
                    $filename = $this->storeFile($file, 'blogs');
                    $image = new ExtraImage();
                    $image->project_id = $project->id;
                    $image->filename = $filename;
                    $image->save();
                    
                }
        }
        $projects =  Projects::all();
        return view('pages.projects.index', ['projects' => $projects]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $project = Projects::with(['images'])->find($id);

        if($project->delete()) {
            if(count($project->images) > 0) {
                $paths = [];
                foreach($project->images as $image) {
                    $paths[] = 'public/blogs/' . $image->filename;
                }
                $this->deleteFile($paths);
            }
        }

        $projects = Projects::all();

        return view('pages.projects.index', ['projects' => $projects])->with('eliminar', 'ok');
        
    }

    public function storeFile($file, $path)
    {
        $uid = Str::random(4) . date('dmYHis');
        $extension = $file->extension();
        $filename = $uid . '.' . $extension;

        Storage::putFileAs(
            'public/' . $path, // 'public/'
            $file,
            $filename
        );

        return $filename;
    }

    public function deleteFile($files)
    {
        $result = Storage::delete($files);

        return $result;
    }

    public function destroyCover(string $id) {
        $image = ExtraImage::find($id);
        if($image->filename !== null) {
            $path = 'public/blogs/' . $image->filename;
            $this->deleteFile($path);
        }

        $image->delete();

        return response()->json([
            'ok' =>true,
            'message' => 'Imagen eliminada'
        ], 200);
    }

    public function updateCover(string $id) 
    {
        try {
            
            $image = ExtraImage::find($id);
            Projects::where('id', $image->project_id)->update(['cover_image' => $image->filename]);

            return response()->json([
                'ok' => true,
                'cover_image' => $image->filename,
                'message' => 'Imagen de portada actualizada'
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'ok' => false,
                'message' => 'Ocurrio un error, intentalo de nuevo'
            ], 500);
        }
    }
}
