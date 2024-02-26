<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Field Magnet</a>
    <button class="openbtn" onclick="openNav()">☰</button> 
    <!-- Sidebar Toggle-->
    
    <!-- Navbar Search-->

    <!-- Navbar-->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                @if (Auth::guard('admin')->user())
                    {{ Auth::guard('admin')->user()->username }}
                @else
                    {{ Auth::user()->fname }}
                    {{ Auth::user()->lname }}
                @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @if (Auth::guard('admin')->user())
                    <a class="dropdown-item" href="{{ route('admin.changePassword') }}">Change Password</a>
                    <a class="dropdown-item" href="{{ route('admin.updateProfile') }}">Edit Profile</a>
                @endif
                <li><hr class="dropdown-divider" /></li>

                @if (!Auth::guard('admin')->user())
                    @livewire('user.auth.logout')
                @else
                    @livewire('admin.auth.logout')
                @endif
             


            </ul>
        </li>
    </ul>
    <script src="js/sidenav.js"></script>
</nav>