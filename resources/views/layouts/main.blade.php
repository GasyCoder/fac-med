<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <style>
        .stylish-text {
        font-weight: bold;
        font-size: 1.3em; 
        color: #ff0008; 
        text-shadow: 2px 2px 4px rgba(45, 85, 231, 0.877); 
        font-family: 'Arial', sans-serif; 
        }
    </style>
</head>
<body>
    <!-- Pre loader -->
    <div class="preloader">
        <div class="preloader-item">
            <div class="spinner-grow text-primary"></div>
        </div>
    </div>
    <x-header/>
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    <!-- =======================
    Footer START -->
    <footer class="pt-5 bg-light">
        <div class="container">
            <hr> <!-- Divider -->
            <!-- Bottom footer -->
            <div class="row">
                <div class="col-12">
                    <div class="pt-2 pb-4 text-center d-md-flex justify-content-between align-items-center">
                        <!-- copyright text -->
                        <div class="text-primary-hover"> Copyrights ©2024 Faculté de Médecine | 
                            <a href="https://www.mahajanga-univ.mg/" target="_blank" class="text-reset">Université de Mahajanga</a>
                            
                        </div>
                        <!-- copyright links-->
                        <div class="mt-3 nav justify-content-center mt-md-0">
                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item"><a class="nav-link" href="#">Politique de confidentialité</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
    Footer END -->    
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/simple-scrollbar.min.js') }}"></script>
    <!-- functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>
</html>