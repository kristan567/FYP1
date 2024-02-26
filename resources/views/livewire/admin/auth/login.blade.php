<div>
    <x-slot:title>
        Login
    </x-slot:title>

    <link rel="stylesheet" href="css/login.css">
    <h1>Admin Login</h1>
    <form action="" wire:submit.prevent='login'>
        <div class="row">
            <label for="email">Email</label>
            <input type="text" wire:model.lazy='username' name="email" autocomplete="off" placeholder="email@example.com">

            @error('username')
            <span class="textdanger">{{$message}}</span>
                
            @enderror
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" wire:model.lazy='password'name="password">
            @error('password')
            <span class="textdanger">{{$message}}</span>
                
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>
</div>

