@extends('layouts.app')

@section('title', 'Proyecto indivudual')

@section('content')
<section id="project">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h3 class="about-title-home"> {{ $project->title }} </h3>
            </div>
        </div>
        <div class="row sm-margin-ten-top">
            <div class="col-12 col-lg-12 d-flex md-margin-30px-bottom  sm-margin-0px-bottom">
                <div class="w-100 md-h-100px sm-h-550px xs-h-450px d-flex justify-content-center">
                    <ul class="list-about">
                        <li class="text-webkit-right list-about2" ><a class="text-decoration-underline" href=" {{route('home')}} ">Home</a></li>
                        <li style="display: flex; justify-content: center; width: 25px;"> <div class="point"></div></li>
                        <li class="text-webkit-left list-about2"><a class="text-decoration-underline" href=" {{route('proyectos')}}" >Proyectos </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="padding-three-top padding-0px-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 last-paragraph-no-margin margin-6-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <h3 class="single-sub-title text-start">Descripción de Proyecto </h3>
                <div class="single-des text-start">
                    {!! $project->body !!}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="big-section wow animate__fadeIn padding-five-top" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row ">
            <div class="col-12 position-relative text-center">
                <div class="owl-carousel owl-theme mb-5" id="popup-gallery">
                    @foreach ($project->images as $image)
                    <div class="item" style="display: flex; justify-content: center" >
                        <a  href="{{asset('storage/blogs/'.$image->filename)}}"  title="">
                            <img id="firs_carrousel_image" class="carousel-img" loading="lazy" src="{{asset('storage/blogs/'.$image->filename)}}" alt="Imagen 1">
                        </a>
                    </div>
                    @endforeach
                    
                    {{--  <div class="item" style="display: flex; justify-content: center" >
                        <a  href="https://via.placeholder.com/500"  title="">
                            <img  class="carousel-img" loading="lazy" src="https://via.placeholder.com/500" alt="Imagen 2">
                        </a>
                        </div>
                        <div class="item" style="display: flex; justify-content: center" >
                            <a  href="https://via.placeholder.com/500"  title="">
                                <img  class="carousel-img" loading="lazy" src="https://via.placeholder.com/500" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="item" style="display: flex; justify-content: center" >
                            <a  href="https://via.placeholder.com/500"  title="">
                                <img  class="carousel-img" loading="lazy" src="https://via.placeholder.com/500" alt="Imagen 4">
                            </a>
                            </div> 
                    --}}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-0 mt-5">
    <div class="container bg-dark-client border-radius-12px padding-15px-tb">
        <div class="row">
            <div class="col-12 col-lg-10 text-center elements-social social-icon-style-09 mx-auto">
                <ul class="medium-icon">
                    <li class="wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <a 
                            href="https://www.facebook.com/sharer.php?u={{ route('single_project', [$project->id]) }}"
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="facebook"
                        >
                            <i class="fab fa-facebook-f"></i><span></span>
                        </a>
                    </li>
                    <li class="wow animate__fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <a 
                            href="https://twitter.com/intent/tweet?url={{ route('single_project', [$project->id]) }}" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="twitter"
                        >
                            <i class="fab fa-twitter"></i><span></span>
                        </a>
                    </li>
                    <li class="wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a 
                            href="http://www.instagram.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="instagram"
                        >
                            <i class="fab fa-instagram"></i><span></span>
                        </a>
                    </li>
                    <li class="wow animate__fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <a
                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('single_project', [$project->id]) }}" 
                            target="_blank"
                            rel="noopener noreferrer"
                            class="linkedin"
                        >
                            <i class="fab fa-linkedin-in"></i><span></span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-8 text-center margin-5-rem-bottom sm-margin-0-rem-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                
                <h5 class="other_project-title">Proyectos Relacionados</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-clean blog-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large2" style="position: relative; ">
                    <li class="grid-sizer"></li>
                        @foreach ($related_projects as $related_project)
                            <li class="grid-item wow animate__fadeIn md-h-500px sm-h-auto " style="visibility: visible; position: absolute; left: 0%; top: 0px; animation-name: fadeIn;">
                                <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                    <div class="blog-post-image bg-dark-client">
                                        <a href="{{ route('single_project', [$related_project->id]) }}">
                                            <img loading="lazy" src="{{ asset('storage/blogs/'.$related_project->cover_image) }}" alt="" data-no-retina="">
                                            <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                                <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-details padding-15px-all xl-padding-25px-lr text-start">
                                        <a href="{{ route('single_project', [$related_project->id]) }}" class="film-title">
                                            {{ $related_project->title }}
                                        </a>
                                    </div>
                                </div>
                            </li>
                            
                        @endforeach
                      {{--   <li class="grid-item wow animate__fadeIn md-h-500px sm-h-auto " style="visibility: visible; position: absolute; left: 0%; top: 0px; animation-name: fadeIn;">
                            <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                <div class="blog-post-image bg-dark-client">
                                    <a href="#">
                                        <img loading="lazy" src="https://via.placeholder.com/500" alt="" data-no-retina="">
                                        <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                            <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="post-details padding-15px-all xl-padding-25px-lr text-start">
                                    <a href="#" class="film-title">
                                        Nombre del proyecto
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item wow animate__fadeIn md-h-500px sm-h-auto " style="visibility: visible; position: absolute; left: 0%; top: 0px; animation-name: fadeIn;">
                            <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                <div class="blog-post-image bg-dark-client">
                                    <a href="#">
                                        <img loading="lazy" src="https://via.placeholder.com/500" alt="" data-no-retina="">
                                        <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                            <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="post-details padding-15px-all xl-padding-25px-lr text-start">
                                    
                                    <a href="#" class="film-title">
                                        Nombre del proyecto
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item wow animate__fadeIn md-h-500px sm-h-auto " style="visibility: visible; position: absolute; left: 0%; top: 0px; animation-name: fadeIn;">
                            <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                <div class="blog-post-image bg-dark-client">
                                    <a href="#">
                                        <img loading="lazy" src="https://via.placeholder.com/500" alt="" data-no-retina="">
                                        <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                            <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="post-details padding-15px-all xl-padding-25px-lr text-start">
                                    
                                    <a href="#" class="film-title">
                                        Nombre del proyecto
                                    </a>
                                </div>
                            </div>
                        </li> --}}
                    
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection