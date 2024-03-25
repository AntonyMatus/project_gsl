
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>GSL - Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{asset('assets/images/icons/favicon_gsl.png')}}">
 
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        @yield('style')
    </head>

    <body>

        <div @auth() id="wrapper" @endauth @guest() class="wrapper-page" @endguest>
            <!-- Top Bar Start -->
    
            @auth()
                <div class="topbar">
    
                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="{{route('home')}}" class="logo">
                            <span>
                                <img 
                                    loading="lazy"
                                    src="{{asset('assets/images/logos/logo_gsl.svg')}}" 
                                    class="img-fluid" 
                                    width="120"
                                />
                            </span>
                            <i>
                                <img
                                    loading="lazy"
                                    src="{{ asset('assets/images/icons/favicon_gsl.png') }}"
                                    class="img-fluid" 
                                    width="60"
                                />
                            </i>
                        </a>
                    </div>
    
                    <nav class="navbar-custom">
    
                        <ul class="navbar-right d-flex list-inline float-right mb-0">
                            
                        </ul>
    
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>
    
                    </nav>
    
                </div>
            @endauth
    
            @auth()
    
                
    
                <div class="left side-menu">
                    <div class="slimscroll-menu" id="remove-scroll">
    
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu" id="side-menu">
                                <li class="menu-title">Main</li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-text"></i><span> Proyectos <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="submenu">
                                        <li><a href="{{route('projects.index')}}">Listado</a></li>
                                        <li><a href="{{route('projects.create')}}">Crear Proyectos</a></li>
                                    </ul>
                                </li>
                                
                                
                               {{--  @if (auth()->user()->is_admin  === 0)
                                <li class="d-none">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="far fa-user-circle"></i><span> Usuarios <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="submenu">
                                        <li><a href="{{route('Users.index')}}">Listado</a></li>
                                        <li><a href=" {{route('Users.create')}} ">Crear Usuario</a></li>
    
                                    </ul>
                                </li>
                                @elseif (auth()->user()->is_admin == 1)
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect"><i class="far fa-user-circle"></i><span> Usuarios <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                    <ul class="submenu">
                                        <li><a href="{{route('Users.index')}}">Listado</a></li>
                                        <li><a href=" {{route('Users.create')}} ">Crear Usuario</a></li>
    
                                    </ul>
                                </li>
                                @endif --}}
                                
                                <li>
                                    <a 
                                        class="waves-effect"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form-sidenav').submit();"
                                    >
                                        <i class="fas fa-sign-out-alt"></i><span> Cerrar Session </span>
                                    </a>
                                    <form id="logout-form-sidenav" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                                </li>
                            </ul>
    
                        </div>
                        <!-- Sidebar -->
                        <div class="clearfix"></div>
    
                    </div>
                    <!-- Sidebar -left -->
    
                </div>
            @endauth
    
            @auth()
                <div class="content-page ">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container-fluid" id="app">
                            @yield('content')
                        </div>
                    </div>
    
                    <footer class="footer">
                        GSL <span id="year"></span> - Desarrollado por <a href="https://www.buho-solutions.com/" target="_blank" rel="noopener noreferrer">Buho Solutions</a>.
                    </footer>
    
                </div>
            @endauth
    
            @guest()
                @yield('content')
            @endguest
        </div>
        
        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>
        @yield('script')
    </body>
</html>