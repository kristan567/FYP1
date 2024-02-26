<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="js/scripts.js" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<script>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /></script> 

<div>

    <style>
       

    body {
      
    font-family: 'Open Sans', sans-serif;
    background: #f9faff;
    color: #3a3c47;
    line-height: 1.6;

  
    margin: 0;
    padding: 0;
    }

    h1 {
    margin-top: 48px;
    }

    form {
    background: #fff;
    max-width: 360px;
    width: 100%;
    padding: 58px 44px;
    border: 1px solid #e1e2f0;
    border-radius: 4px;
    box-shadow: 0 0 5px 0 rgba(42, 45, 48, 0.12);
    transition: all 0.3s ease;
    }

    .row {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
    }

    .row label {
    font-size: 13px;
    color: #8086a9;
    }

    .row input {
    flex: 1;
    padding: 13px;
    border: 1px solid #d6d8e6;
    border-radius: 4px;
    font-size: 16px;
    transition: all 0.2s ease-out;
    }

    .row input:focus {
    outline: none;
    box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
    }

    .row input::placeholder {
    color: #C8CDDF;
    }

    button {
    width: 100%;
    padding: 12px;
    font-size: 18px;
    background: #15C39A;
    color: #fff;
    border: none;
    border-radius: 100px;
    cursor: pointer;
    font-family: 'Open Sans', sans-serif;
    margin-top: 15px;
    transition: background 0.2s ease-out;
    }

    button:hover {
    background: #55D3AC;
    }

    @media(max-width: 458px) {
    
    body {
        margin: 0 18px;
    }
    
    form {
        background: #f9faff;
        border: none;
        box-shadow: none;
        padding: 20px 0;
    }

    }

    </style>




    <x-slot:title>
        change Password
    </x-slot:title>

    <link rel="stylesheet" href="css/login.css">
    <h1>Admin Login</h1>
    <form action="" wire:submit.prevent='changePassword'>
        <div class="row">
            <label for="email">Email</label>
            <input type="text" wire:model.lazy='username' name="email" autocomplete="off" placeholder="email@example.com">

            @error('username')
            <span class="textdanger">{{$message}}</span>
                
            @enderror
        </div>
        <div class="row">
            <label for="password">Enter New Password</label>
            <input type="password" wire:model.lazy='password'name="password">
            @error('password')
            <span class="textdanger">{{$message}}</span>
                
            @enderror
        </div>
        <button type="submit">change password</button>
    </form>

    @if (session()->has('success'))
        <script>
            Command: toastr["success"]("{!! session('success') !!}")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            Command: toastr["error"]("{!! session('error') !!}")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    @endif
</div>

<script>  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /></script>     {{-- toastr css cdn --}}
      




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

