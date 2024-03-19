@extends('layouts.app')

@section('title', 'Proyectos')

@section('styles')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
@endsection

@section('content')
    <section id="down-section" class="padding-80px-top md-padding-70px-top md-padding-40px-bottom sm-padding-50px-top xs-padding-20px-top sm-padding-25px-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="title-proyectos margin-3-half-rem-bottom">Nuestros Proyectos</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-3 justify-content-center">
                <!-- start team item -->
                @foreach ($projects as $project )
                    <div class="col team-style-02 text-center padding-2-half-rem-top testimonials_item">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img loading="lazy" class="img-project-fit" alt="Proyecto 1" src=" {{asset('storage/blogs/'.$project->cover_image)}} " data-no-retina="">
                                <div class="team-member-details bg-transparent-dark-gray align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="social-icon w-100 position-absolute left-0px">
                                        <a href="{{route('single_project', [$project->id])}}" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white">
                                            <i class="fas fa-link icon-very-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-left padding-35px-tb sm-padding-25px-tb">
                                <a href="{{route('single_project', [$project->id])}}">
                                    <div class="card-title-project">{{$project->title}}</div>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
            @php
                $nextPage = $projects->nextPageUrl();
                $previousPageUrl = $projects->previousPageUrl();
                $currentNumberItems = $projects->count();
            @endphp
            {{-- <div class="row">
                <div class="col-xl-10 justify-content-center">
                    {{  $projects->links() }}
                </div>
                </div> 
            --}}
            @if ($currentNumberItems !== 0)
                <div class="row margin-3-half-rem-top">
                    @if (!is_null($nextPage))
                    <div class="col-xl-12 text-center">
                        <a href="{{ $nextPage }}" class="btn btn-medium border-radius-12px btn-blue text-capitalize">
                            Ver más Proyectos
                        </a>
                    </div>
                    @endif
                    @if (is_null($nextPage))
                        <div class="col-xl-12 text-center">
                            <a href="{{ $previousPageUrl }}" class="btn btn-medium border-radius-12px btn-blue text-capitalize">
                                Ver menos
                            </a>
                        </div>
                    @endif
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection

@section('scripts')
{{-- <script>
    function show_more_proyects(){
        $('.testimonials_item').removeClass('d-none');
        $('#bottom_ver_mas').addClass('d-none');
        $('#bottom_ver_menos').removeClass('d-none');
    }
    function hide_more_proyects(){
        $('.new-testimonial-item').addClass('d-none');
        $('#bottom_ver_menos').addClass('d-none');
        $('#bottom_ver_mas').removeClass('d-none');
    }
</script> --}}

@endsection