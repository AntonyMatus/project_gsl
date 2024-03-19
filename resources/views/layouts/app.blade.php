<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- <meta name="keywords" content="Zoe, Towhouses, Departamentos, Norte de Mérida, Mérida, Yucatán, Departamentos de lujo, Townhouses de Lujo, Preventa, Entrega 2023, Entrega 2024, Amenidades, 2 autos, Vigilancia, Seguridad, Parque central, Complejo de lujo, Bienes raíces, Inmobiliaria mérida, Invertir Mérida Yucatán."> -->
	<title>GSL | @yield('title')</title>

	<link rel="shortcut icon" href="{{asset('assets/images/icons/favicon_gsl.png')}}">
	<link rel="stylesheet" href=" {{ asset('assets/css/main.css')}} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/flexboxgrid.min.css')}} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/font-icons.min.css')}} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/font-icons.min.css')}} ">


	<link rel="stylesheet" href=" {{ asset('assets/plugins/photo-swipe/photoswipe.css')}} ">
	<link rel="stylesheet" type="text/css" href=" {{ url('https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css')}} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/theme-vendors.min.css')}} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/magnific-popup.css')}} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/owl.carousel.min.css')}} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/style.css')}} " />
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/responsive.css')}} " />
    @yield('styles')
	<script defer src=" {{ url('https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js')}} "></script>

	
</head>
<body data-mobile-nav-style="classic">
    
    <header class="header-with-topbar">
        <nav class="navbar navbar-expand-lg top-space  navbar-light bg-white  header-dark fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container justify-content-between">
                <div class="col-auto col-lg-2 col-sm-5 ps-lg-0 me-auto me-lg-0 " >
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img  src="{{ asset('assets/images/logos/logo_gsl.svg')}}" alt="" class="default-logo" >
                        <img src="{{ asset('assets/images/logos/logo_gsl.svg')}}" alt="" class="alt-logo" >
                        <img src="{{asset('assets/images/logos/gsl-logo-mobile.svg')}}" class="mobile-logo float-left" alt="" >
                    </a>
                </div>
                <div class="col-auto col-lg-7 col-sm-2 md-position-initial sm-padding-0px-lr">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav alt-font2 align-items-center">
                            <li class="nav-item dropdown megamenu">
                                <a href="{{route('index')}}#intro" class="nav-link text-uppercase">Introducción</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{route('index')}}#townhouses" class="nav-link text-uppercase">Servicios</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{route('index')}}#gallery" class="nav-link text-uppercase">Áreas de Negocio</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{route('proyectos')}}" class="nav-link text-uppercase">Proyectos</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{route('index')}}#contact" class="nav-link text-uppercase">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-3 sm-d-none d-flex justify-content-center">
                    <a type="button" class="btn-contact" href="https://wa.link/p29m20" target="_blank" rel="noopener noreferrer">
                        Contáctanos
                    </a>
                </div>
    
            </div>
        </nav> 
    </header>

    @yield('content')

	<footer>
		<div class="container">
			<div class="logo">
				<img loading="lazy" width="200" src="{{asset('assets/images/logos/footer_logo.svg')}}" alt="Logo de azana">
			</div>
			<ul>
				<li>
					<a href="#!">Introducción</a>
				</li>
				<li>
					<a href="#!">Servicios</a>
				</li>
				<li>
					<a href="#!">Áreas de Negocio</a>
				</li>
				<li>
					<a href="#!">Proyectos</a>
				</li>
				<li>
					<a href="#!">Contacto</a>
				</li>
			</ul>
			<p>
				<a href="{{route('login')}}"> <i class="fa fa-user" aria-hidden="true"></i> </a> &nbsp; GSL <span id="year"></span>  - Desarrollado por <a href="https://www.buho-solutions.com" target="_blank" rel="noopener noreferrer">Búho Solutions</a>.
			</p>
		</div>
	</footer>
	<!-- <a class="btn-whatsapp" href="https://wa.link/p29m20" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#FFFFFF">
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
        </svg>
    </a> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	<!-- sweatalert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src=" {{ asset('./assets/js/app.js') }} "></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" src=" {{ asset('assets/js/jquery.min.js') }} "></script>
	<script type="text/javascript" src=" {{ asset('assets/js/theme-vendors.min.js') }} "></script>
	<script type="text/javascript" src=" {{ asset('assets/js/owl.carousel.min.js') }} "></script>
	<script type="text/javascript" src=" {{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>
	<script type="text/javascript" src=" {{ asset('assets/js/main.js') }} "></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @yield('scripts')
	<script>
		function openModal() 
		{
			const image = document.getElementById('firs_carrousel_image');
			if(image) {
				image.click();
			}  
        }
		function enabledSubmit(response){
			const submit = document.getElementById('send_message');
			submit.disabled = false;
		}
	</script>

	<script type="module">
		import PhotoSwipeLightbox from '/assets/plugins/photo-swipe/photoswipe-lightbox.esm.js';
		const lightbox = new PhotoSwipeLightbox({
			gallery: '#popup-gallery',
			children: '.owl-item a',
			pswpModule: () => import('/assets/plugins/photo-swipe/photoswipe.esm.js')
		});
		lightbox.init();
	</script>

</body>
</html>