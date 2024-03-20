@extends('layouts.app')

@section('title', 'Introducción')

@section('styles')
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>
@endsection

@section('content')
<section class="p-0">
    <div class="hero-wrapper position-relative">
        <div class="container-intro p-0 m-0">
            <div class="row intro-row">
                <div class="col-12 col-xl-8">
                    <img class="object-fit-contain" src="{{ asset('assets/images/intro/imagen-planing.jpeg') }}" alt="placeholder img">
                </div>
                <div class="col-12 col-xl-4 container-info">
                    <div class="alt-font2 margin-10px-left text-info-2">
                        <i class="fas fa-map-marker-alt icon-very-small margin-10px-right text-blue-client"></i>
                        6391 Elgin St. Celina, Delaware 10299
                    </div>
                    <div class="alt-font2 margin-10px-left text-info-2">
                        <i class="feather icon-feather-mail icon-very-small margin-10px-right text-blue-client"></i>
                        example@gmail.com
                    </div>
                    <div class="alt-font2 margin-10px-left text-info-2">
                        <i class="feather icon-feather-phone-call icon-very-small margin-10px-right text-blue-client"></i>
                        (406) 555-0120
                    </div>
                </div>
                <div class="col-auto d-xl-none">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bienvenido a grupo de servicios lamu</h5>
                            <h6 class="card-subtitle mb-2 ">Desde el diseño hasta la entrega final. </h6>
                            <p class="card-text">Comprometidos a cumplir con los más altos estándares de construcción y diseño para superar tus expectativas y hacer realidad tus sueños. </p>
                            <a href="#" class="btn btn-blue text-button">Proyectos</a>
                            <a href="#" class="btn btn-black2 text-button margin-10px-left">Quiénes Somos &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-card position-absolute d-sm-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bienvenido a grupo de servicios lamu</h5>
                    <h6 class="card-subtitle mb-2 ">Desde el diseño hasta la entrega final. </h6>
                    <p class="card-text">Comprometidos a cumplir con los más altos estándares de construcción y diseño para superar tus expectativas y hacer realidad tus sueños. </p>
                    <a href="#" class="btn btn-blue text-button">Proyectos</a>
                    <a href="#" class="btn btn-black2 text-button margin-10px-left">Quiénes Somos &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
            </div>
        </div>
    </div>
</section>

<section class="azana-section" id="intro">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xs-12 col-sm-6 texts">
                <h1 class="title">Proporcionar soluciones habitacionales de alta calidad.</h1>
                <p>
                    Grupo de servicios LAMU. S.A. de C.V. Es una destacada empresa yucateca dedicada a la construcción de viviendas, que se ha consolidado como un referente en el sector de la construcción en la región. <br><br> 
                    Fundada en 2019, la empresa ha demostrado un compromiso constante con la calidad, la innovación y la satisfacción del cliente.
                    
                </p>
                <a href="#" class="btn btn-blue text-button margin-1-half-rem-top font-weight-400">¡Contáctanos!</a>
                <div class="row row-cols-3 row-cols-lg-3 row-cols-sm-2 client-logo-style-05 margin-3-half-rem-top align-items-end">
                    <!-- start client logo item -->
                    <div class="col text-center md-margin-40px-bottom xs-margin-50px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <a href="#!"><img src="{{asset('assets/images/logos/azana.png')}}" alt="" class="lg-w-1000px" data-no-retina=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col text-center md-margin-40px-bottom xs-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <a href="#!"><img src="{{ asset('assets/images/logos/zoe.png') }} " alt="" class="lg-w-1000px" data-no-retina=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col text-center xs-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="#!"><img src="{{ asset('assets/images/logos/aurum.png') }} " alt="" class="lg-w-1000px" data-no-retina=""></a>
                    </div>
                    <!-- end client logo item -->
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 image"></div>
        </div>
    </div>
</section>

<section class="apartments-section bg-white2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-12 col-md-12 texts">
                <h1 class="title">Nuestros Servicios</h1>
                <p>
                    Ofrecemos una amplia gama de servicios especializados en la construcción de viviendas de alta calidad. Desde el diseño inicial hasta la entrega final, estamos comprometidos a cumplir con los más altos estándares de construcción y diseño para superar tus expectativas y hacer realidad tus sueños.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center row-gap-4rem">
            <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn position-relative sm-padding-0px-lr" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all position-relative">
                    <div class="feature-box-content margin-2-half-rem-top last-paragraph-no-margin">
                        <span class="alt-font2 text-card-servicios ">Diseño Arquitectónico</span>
                        <p>
                            Desde proyectos nuevos hasta renovaciones, colaboramos estrechamente contigo para crear espacios funcionales y estéticamente impresionantes que se adapten a tu estilo de vida.
                        </p>
                    </div>
                </div>
                <div class="feature-box-icon position-absolute icon-servicios">
                    <img loading="lazy" src="{{ asset('assets/images/icons/Diseño.png') }}" alt="Diseño Arquitectonico">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn position-relative sm-padding-0px-lr" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all position-relative">
                    <div class="feature-box-content margin-2-half-rem-top last-paragraph-no-margin">
                        <span class="alt-font2 text-card-servicios ">Construcción de Viviendas</span>
                        <p>
                            Construimos hogares excepcionales que superan tus sueños. Con atención meticulosa a cada detalle, garantizamos una calidad excepcional en cada etapa, desde la cimentación hasta los acabados finales.
                        </p>
                    </div>
                </div>
                <div class="feature-box-icon position-absolute icon-servicios">
                    <img loading="lazy" src="{{ asset('assets/images/icons/construccion_viviendas.png')}}" alt="Diseño Arquitectonico">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn position-relative sm-padding-0px-lr" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all position-relative">
                    <div class="feature-box-content margin-2-half-rem-top last-paragraph-no-margin">
                        <span class="alt-font2 text-card-servicios ">Remodelación y Renovación</span>
                        <p>
                            Desde pequeñas mejoras hasta renovaciones completas, nuestro equipo experto está comprometido a superar tus expectativas y crear el hogar perfecto para ti.
                        </p>
                    </div>
                </div>
                <div class="feature-box-icon position-absolute icon-servicios">
                    <img loading="lazy" src=" {{asset('assets/images/icons/remodelacion.png')}} " alt="Remodelación">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn position-relative sm-padding-0px-lr" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all position-relative">
                    <div class="feature-box-content margin-2-half-rem-top last-paragraph-no-margin">
                        <span class="alt-font2 text-card-servicios ">Renta de Maquinaria</span>
                        <p>Ofrecemos una amplia gama de maquinaria para alquilar, asegurando que tengas las herramientas adecuadas para tus proyectos.</p>
                    </div>
                </div>
                <div class="feature-box-icon position-absolute icon-servicios">
                    <img loading="lazy" src=" {{asset('assets/images/icons/renta-maquinaria.png')}} " alt="Renta de Maquinaria">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn position-relative sm-padding-0px-lr" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all position-relative">
                    <div class="feature-box-content margin-2-half-rem-top last-paragraph-no-margin">
                        <span class="alt-font2 text-card-servicios ">Asesoramiento técnico</span>
                        <p>
                            Nuestro equipo técnico está disponible para brindarte asesoramiento experto en todas las etapas de tu proyecto, desde la planificación hasta la ejecución. Confía en nosotros para apoyarte en cada paso del camino hacia el éxito de tu proyecto.
                        </p>
                    </div>
                </div>
                <div class="feature-box-icon position-absolute icon-servicios">
                    <img loading="lazy" src=" {{asset('assets/images/icons/asesoramiento.png')}} " alt="Asesoramiento técnico">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="area-negocios">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-12 wow animate__fadeInRight" data-wow-delay="0.2s">
                <div class="testimonials-carousel-style-01 swiper-simple-arrow-style-1">
                    <div class="swiper-container" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": false, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 } } }'>
                        <!-- { "delay": 3000, "disableOnInteraction": false } -->
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-5 text-left sm-padding-20px-bottom">
                                            <h3 class="subtitle-section">Construcción y Remodelación</h3>
                                            <p class="info-section">
                                                ¡Transforma tu espacio con GSL! Ofrecemos servicios de Construcción y Remodelación de alta calidad, desde la planificación hasta la entrega final. Con años de experiencia y un enfoque en la calidad y la satisfacción del cliente, estamos aquí para hacer realidad tus proyectos de construcción y renovación.
                                            </p>
                                        </div>
                                        <div class="col-xl-7">
                                            <img loading="lazy" src="{{ asset('assets/images/home/contruccion-y-remodelacion.jpeg')}}" alt="Construcción y Remodelación">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-5 text-left sm-padding-20px-bottom">
                                            <h3 class="subtitle-section">Desarrollo de Proyectos</h3>
                                            <p class="info-section">
                                                Nos especializamos en el desarrollo de proyectos que superan tus expectativas. Ya sea que estés planeando construir una vivienda residencial, un complejo comercial o un proyecto de desarrollo urbano, nuestro equipo experto está listo para ayudarte en cada etapa del proceso. Desde la conceptualización hasta la ejecución y entrega final, nos comprometemos a ofrecerte soluciones innovadoras y de alta calidad que se ajusten a tus necesidades y presupuesto.
                                            </p>
                                        </div>
                                        <div class="col-xl-7">
                                            <img loading="lazy" src=" {{asset('assets/images/home/desarrollo-de-proyectos.jpeg')}} " alt="Desarrollo de Proyectos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-5 text-left sm-padding-20px-bottom">
                                            <h3 class="subtitle-section">Renta de Maquinaria</h3>
                                            <p class="info-section">
                                                Ofrecemos un servicio de renta de maquinaria para satisfacer tus necesidades de construcción y remodelación. Con mantenimiento regular y una atención meticulosa a la calidad, puedes confiar en que nuestra maquinaria estará lista para trabajar cuando la necesites.
                                            </p>
                                        </div>
                                        <div class="col-xl-7">
                                            <img loading="lazy" src=" {{asset('assets/images/home/renta-de-maquinaria.jpeg')}} " alt="Desarrollo de Proyectos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            
                            
                        </div> 
                    </div>
                </div>
            </div>
            <div class="position-absolute">
                <h2 class="title-section">Áreas de Negocio</h2>
            </div>
            <div class="position-absolute">
                <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 rounded-circle "><i class="feather icon-feather-arrow-right"></i></div>
                <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 rounded-circle"><i class="feather icon-feather-arrow-left"></i></div>
            </div>
        </div>
    </div>
</section>

<section class="big-section wow animate__fadeIn pt-0 padding-2-half-rem-bottom" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="col-12 col-xl-4 col-lg-4 col-sm-7 d-flex flex-column text-center text-lg-start md-margin-6-rem-bottom">
                
                <h5 class="alt-font2 title-negocios">Ofertas de Negocio</h5>
                <p class="description-negocios">
                    Nuestro equipo está preparado para llevar a cabo cualquier desafío con excelencia y dedicación. Nuestro compromiso con la calidad, la innovación y la satisfacción del cliente nos convierte en tu socio ideal en el camino hacia la realización de tus proyectos. 
                </p>
                <div class="mt-3 mx-auto mx-lg-0">
                    <a href="index.html" class="btn btn-blue btn-client">Más Información</a>
                </div>
            </div>
            <div class="col-12 col-xl-7 offset-xl-1 col-lg-8 last-paragraph-no-margin wow animate__fadeIn" data-wow-duration="0.3" style="visibility: visible; animation-name: fadeIn;">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn bg-white-client padding-15px-tb" style="visibility: visible; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon">
                            <div class="feature-box-icon">
                                <img loading="lazy" src="{{asset('assets/images/icons/icon_1.png')}}" alt="Proyectos Arquitectonicos" srcset="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font2 project-card-title">Proyectos <br> arquitectónicos </span>
                                <p class="project-card-description">Diseños innovadores y funcionales que reflejen tu estilo de vida</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn bg-white-client padding-15px-tb" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon">
                            <div class="feature-box-icon">
                                <img loading="lazy" src=" {{asset('assets/images/icons/tramites.png')}} " alt="Trámites constructivos">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font2 project-card-title">Trámites <br> constructivos</span>
                                <p class="project-card-description">Simplifica tu proceso de construcción desde permisos hasta licencias.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col xs-margin-40px-bottom wow animate__fadeIn bg-white-client padding-15px-tb" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon">
                            <div class="feature-box-icon">
                                <img loading="lazy" src=" {{asset('assets/images/icons/proyectos.png')}} " alt="Proyectos Estructurales">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font2 project-card-title">Proyectos <br> estructurales</span>
                                <p class="project-card-description">Garantiza la seguridad y solidez de tu construcción</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col wow animate__fadeIn bg-white-client padding-15px-tb" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon">
                            <div class="feature-box-icon">
                                <img loading="lazy" src=" {{asset('assets/images/icons/administracion.png')}} " alt="Administración">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font2 project-card-title">Administración de proyectos</span>
                                <p class="project-card-description">Planifica, coordina y ejecuta cada fase garantizando su éxito.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="down-section" class="padding-80px-top md-padding-70px-top md-padding-40px-bottom sm-padding-50px-top xs-padding-20px-top sm-padding-25px-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3 class="title-proyectos-destacados margin-3-half-rem-bottom">Proyectos Destacados</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-3 justify-content-center">
            <!-- start team item -->
            @foreach ($projects as $project )
                <div class="col team-style-02 text-center">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img class="img-project-fit" alt="Proyecto 1" src="{{asset('storage/blogs/'.$project->cover_image)}}" data-no-retina="">
                            <div class="team-member-details bg-transparent-dark-gray align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                <div class="social-icon w-100 position-absolute left-0px">
                                    <a href="{{ route('single_project',[$project->slug]) }}" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white">
                                        <i class="fas fa-link icon-very-small" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position text-left padding-35px-tb sm-padding-25px-tb">
                            <a href="{{ route('single_project',[$project->slug]) }}">
                                <div class="card-title-project">{{$project->title}}</div>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
            <!-- end team item -->
            <!-- start team item -->
            {{-- <div class="col team-style-02 text-center">
                <figure>
                    <div class="team-member-image border-radius-5px overflow-hidden">
                        <img alt="Proyecto 2" src="assets/images/home/proyecto2.png" data-no-retina="">
                        <div class="team-member-details bg-transparent-dark-gray align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                            <div class="social-icon w-100 position-absolute left-0px">
                                <a href="single_project.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white">
                                    <i class="fas fa-link icon-very-small" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <figcaption class="team-member-position text-left padding-35px-tb sm-padding-25px-tb">
                        <a href="single_project.html">
                            <div class="card-title-project">Azana Boutique Apartments</div>
                        </a>
                    </figcaption>
                </figure>
            </div> --}}
            <!-- end team item -->
            <!-- start team item -->
            {{--  <div class="col team-style-02 text-center">
                <figure>
                    <div class="team-member-image border-radius-5px overflow-hidden">
                        <img alt="Proyecto 3" src="assets/images/home/proyecto3.png" data-no-retina="">
                        <div class="team-member-details bg-transparent-dark-gray align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                            <div class="social-icon w-100 position-absolute left-0px">
                                <a href="single_project.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white">
                                    <i class="fas fa-link icon-very-small" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <figcaption class="team-member-position text-left padding-35px-tb sm-padding-25px-tb">
                        <a href="single_project.html">
                            <div class="card-title-project">Zinalba</div>
                        </a>
                    </figcaption>
                </figure>
                </div> 
            --}}
            <!-- end team item -->
            <!-- start team item -->
            {{--     <div class="col team-style-02 text-center padding-2-half-rem-top">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="assets/images/home/proyecto1.png" data-no-retina="">
                            <div class="team-member-details bg-transparent-dark-gray align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                <div class="social-icon w-100 position-absolute left-0px">
                                    <a href="single_project.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white">
                                        <i class="fas fa-link icon-very-small" aria-hidden="true"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                            <a href="single_project.html">
                                <div class="card-title-project">Natura 126, 127 y 128</div>
                            </a>
                        </figcaption>
                    </figure>
                </div> --}}
            <!-- end team item -->
            <!-- start team item -->
            {{--     <div class="col team-style-02 text-center padding-2-half-rem-top">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="assets/images/home/proyecto2.png" data-no-retina="">
                            <div class="team-member-details bg-transparent-dark-gray align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                <div class="social-icon w-100 position-absolute left-0px">
                                    <a href="single_project.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white">
                                        <i class="fas fa-link icon-very-small" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                            <a href="single_project.html">
                                <div class="card-title-project">INARA</div>
                            </a>
                        </figcaption>
                    </figure>
                </div> --}}
            <!-- end team item -->
            <!-- start team item -->
            {{--      <div class="col team-style-02 text-center padding-2-half-rem-top">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="assets/images/home/proyecto3.png" data-no-retina="">
                            <div class="team-member-details bg-transparent-dark-gray align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                <div class="social-icon w-100 position-absolute left-0px">
                                    <a href="single_project.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white">
                                        <i class="fas fa-link icon-very-small" aria-hidden="true"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                            <a href="single_project.html">
                                <div class="card-title-project">Zendera 115</div>
                            </a>
                        </figcaption>
                    </figure>
                </div> --}}
            <!-- end team item -->
        </div>
        <div class="row margin-3-half-rem-top">
            <div class="col-xl-12 text-center">
                <a href="{{ route('proyectos')}}" class="btn btn-medium border-radius-12px btn-blue text-capitalize">
                    Ver más Proyectos
                </a>
            </div>
        </div>
    </div>
</section>
<section class="contact-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="title">Llevemos tu idea a la realidad</h1>
                <h3 class="subtitle">¡Pongámonos en contacto!</h3>
                <form onsubmit="onSubmit(event)"  id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-md-6 text-left">
                            <label for="name">Nombre Completo</label>
                            <input 
                                type="text" 
                                name="name"
                                placeholder="" 
                                required 
                            />
                        </div>
                        <div class="col-xs-12 col-md-6 text-left">
                            <label for="telefono">Teléfono</label>
                            <input 
                                type="number" 
                                name="phone"
                                placeholder="" 
                                required 
                            />
                        </div>
                        <div class="col-xs-12 col-md-6 text-left">
                            <label for="compañia">Compañía</label>
                            <input 
                                type="text" 
                                name="company"
                                placeholder="" 
                                required 
                            />
                        </div>
                        <div class="col-xs-12 col-md-6 text-left">
                            <label for="email">Email</label>
                            <input 
                                type="email" 
                                name="email"
                                placeholder="" 
                                required 
                            />
                        </div>
                        <div class="col-xs-12 col-md-6 text-left">
                            <label for="property_type">Servicio Interesado</label>
                            <select
                                name="property_type"
                                required 
                            >
                                <option value="" selected>Lista de Servicios</option>
                                <option>Construcción y Remodelación</option>
                                <option>Desarrollo de Proyectos</option>
                                <option>Renta de Maquinaria</option>
                                <option>Proyectos arquitectónicos</option>
                                <option>Trámites constructivos</option>
                                <option>Proyectos estructurales</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="h-captcha" data-sitekey="{{ env('HCAPTCHA_SITEKEY') }}"></div>
                        </div>
                        
                    </div>
                    <button id="send_message" type="submit">Enviar</button>
                    <div class="form-results text-center"></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('assets/js/contact.js') }}"></script>
@endSection