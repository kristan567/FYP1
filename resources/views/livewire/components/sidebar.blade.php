
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

{{-- <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                
         
               
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div> --}}


<div>
    <style>
        
.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .sidebar a:hover {
    color: #f1f1f1;
  }
  
  .sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  .openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
  }
  
  .openbtn:hover {
    background-color: #444;
  }
  
  #main {
    transition: margin-left .5s;
    padding: 16px;
  }
  
  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
  }
    </style>
    <link rel="stylesheet" href="css/sidenav.css">
        <div id="mySidebar" class="sidebar">
            <a class="navbar-brand ps-3" href="index.html">Field Magnet</a>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

            @if (!Auth::guard('admin')->user())
                <a class="nav-link" href="{{ route('users.tasks') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>Tasks</div>
                </a>

            @else
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>Dashboard</div>
                </a>
                <a class="nav-link" href="{{ route('admin.category') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>Category</div>
                </a>
                <a class="nav-link" href="{{ route('admin.tasks') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>Task</div>
                </a>
                <a class="nav-link" href="{{ route('admin.users') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>Users</div>
                </a>
                
                
            @endif

                    
  


        
        <a href="#">Contact</a>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>

            @if (Auth::guard('admin')->user())
                {{ Auth::guard('admin')->user()->username }}
                
            @endif
            
            @auth
                {{Auth::user()->fname}}
                {{Auth::user()->lname}}
            @endauth

        </div>
        </div>
        <div id="main">
              
        
        </div>
        <script src="js/sidenav.js"></script> 
        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }
            
            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
            }
        </script>

    
</div>

    


