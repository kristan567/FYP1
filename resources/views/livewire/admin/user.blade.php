

<div>
    <!-- jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="js/scripts.js" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  

    <x-slot:title>
   Users
    </x-slot:title>

    @include('livewire.components.createUser')
    @include('livewire.components.updateUser')

    <div class="container">
        <div class="card my-4">
            <div class="card-header bg-danger">
                <div class="d-flex justify-content-between">
                    <h3>Users list</h3>
                    <button data-toggle="modal" data-target="#addUser" class="btn btn-secondary" >Add Users</button>
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex">
                    @if (Auth::guard('admin')->user())
                        <a href="{{ route('admin.userexportPDF') }}">
                            <button class="btn btn-secondary">PDF</button>
                        </a>
                        <button class="btn btn-secondary ml-3">Print</button>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($users))
                                @foreach ($users as $user )
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->fname}} {{$user->lname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td><button wire:click='editUser({{ $user->id }})' data-toggle="modal" data-target="#updateUser" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                        <td><button wire:click='deleteUser({{ $user->id }})' class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                                    </tr>
                                @endforeach
           
                                
                            @else
                                <h2>Record not found!</h2>
                              
                                
                            @endif
                            
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="card-body">

                {{ $users->links('custom-pagination-links-view') }}
                
            </div>
        </div>

              
      
        
        {{-- <!-- Modal -->   add user --}}
        {{-- <div class="modal fade" id="addUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Worker</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="" >
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Enter First Name</label>
                            <input type="text"  class="form-control">
                            
                        </div>
    
                        <div class="form-group">
                            <label for="">Enter Last Name</label>
                            <input type="text"  class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="email"  class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter Phone</label>
                            <input type="number"  class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter password</label>
                            <input type="password"  class="form-control"> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div> --}}


        {{-- update user --}}
        {{-- <div class="modal fade" id="updateUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">update the field</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
               
                <form action="" >
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Enter First Name</label>
                            <input type="text"  class="form-control">
                            
                        </div>
    
                        <div class="form-group">
                            <label for="">Enter Last Name</label>
                            <input type="text"  class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="email"  class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter Phone</label>
                            <input type="number"  class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter password</label>
                            <input type="password"  class="form-control"> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div> --}}



        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

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



</div>





