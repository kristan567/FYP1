<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>    

        @if (!Auth::guard('admin')->user())
            User
        @else
            Admin
        @endif
        - {{ $title }}</title>

        <link href="{{asset('js/scripts.js')}}" rel="stylesheet" />

        @livewireStyles

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
            {{-- toastr css cdn --}}
        <script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
            integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" /></script>

    </head>
    <body class="sb-nav-fixed">
       @livewire('components.Navbar')
        <div id="layoutSidenav">
           @livewire('components.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    {{ $slot }}
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        @livewireScripts

        <!-- jQuery -->



    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
                    {{-- toastr css cdn --}}
                  <script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
                    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer" /></script>  
        <script>
            window.livewire.on('addCategory', function() {
                $('#addCategory').modal('hide');
            })

            window.livewire.on('updateCategory', function() {
                $('#updateCategory').modal('hide');
            })

            window.livewire.on('addUser', function() {
                $('#addUser').modal('hide');
  
            })

            window.livewire.on('updateUser', function() {
                $('#updateUser').modal('hide');
            })

            window.livewire.on('addTask', function() {
                $('#addTask').modal('hide');
            })

            window.livewire.on('updateTask', function() {
                $('#updateTask').modal('hide');
            })

        </script>
        

    

    </body>
</html>
