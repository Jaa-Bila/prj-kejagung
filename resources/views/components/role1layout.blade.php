<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('vendors')}}/plugins/fontawesome-free/css/all.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('vendors')}}/dist/css/adminlte.min.css">
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
        
            @livewire('navigation-role1')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                {{ $slot }}
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- Default to the left -->
                <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Pawitra Network</a>.</strong> All rights reserved.
            </footer>
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->

            <!-- jQuery -->
            <script src="{{asset('vendors')}}/plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="{{asset('vendors')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('vendors')}}/dist/js/adminlte.min.js"></script>
            
        </div>


        @livewireScripts
    </body>
</html>
