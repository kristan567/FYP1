<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin- {{$title}}</title>

        <link href="{{asset('js/scripts.js')}}" rel="stylesheet" />

        @livewireStyles 

    </head>
    <body >         
        {{ $slot }}





        
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        @livewireScripts
    </body>
</html>
