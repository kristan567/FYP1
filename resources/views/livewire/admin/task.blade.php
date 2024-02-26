

<div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="js/scripts.js" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>







    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-K+9m6f38u1z8QOG6T7uVeRTjl2vuJ+7vj5AWTb1P1Z8=" crossorigin="anonymous"></script>

<!-- Bootstrap bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-EttnzIj/qyrS2n0WnBbuO/BStzKOgQ/8G4x8w9U8Mp4+uuODHez8N/rJKg0jBTzo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

    <x-slot:title>
    Tasks
    </x-slot:title>

    @include('livewire.components.createTask')

    @auth
    @include('livewire.components.userUpdateTasks')
      
    @endauth

    @guest
    @include('livewire.components.updateTask')
    @endguest
    

 
  

    
    <div class="container">
        <div class="card my-4">
            <div class="card-header bg-danger">
                <div class="d-flex justify-content-between">
                    <h3>Tasks list</h3>

             

                      @if (Auth::guard('admin')->user())
                        <button data-toggle="modal" data-target="#addTask" class="btn btn-secondary" >Add Tasks</button>
                      @endif
                    
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex">
                    @if (Auth::guard('admin')->user())
                        <a href="{{ route('admin.taskexportPDF') }}">
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
                                <th>Task Name</th>
                                <th>status</th>
                                <th>Assign User</th>
                                <th>Edit</th>
                                @if (Auth::guard('admin')->user())
                                    <th>Delete</th>
                                @endif
                                    
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($tasks))

                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{$task->id}}</td>
                                    <td>{{$task->title}}</td>
                                    <td>{{ $task->status == 0 ? 'Not Started' : '' }}
                                                {{ $task->status == 1 ? 'Started' : '' }}
                                                {{ $task->status == 2 ? 'Pending' : '' }}
                                                {{ $task->status == 3 ? 'Complete' : '' }}
                                    </td>
                                    <td>{{$task->users->fname}} {{$task->users->lname}}</td>
                                    <td><button wire:Click="editTasks({{$task->id}})" data-toggle="modal" data-target="#updateTask" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></td>

                                    @if (Auth::guard('admin')->user())

                                    <td><button wire:Click="deleteTasks({{$task->id}})" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                                        
                                    @endif
                               
                                </tr>
                                
                            @endforeach
                                
                            @else

                                <h2>Record not found</h2>
                                
                            @endif
                          
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="card-body">

                {{ $tasks->links('custom-pagination-links-view') }}
                
            </div>
        </div>

              
      
        
        <!-- Modal -->
        {{-- <div class="modal fade" id="addTasks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Tasks</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="" wire:submit.prevent='store'>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Enter Title</label>
                            <input type="text" wire:model.lazy='title' class="form-control form-control-lg">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter Category</label>
                            <select wire:model.lazy='cat_id' class="form-control">
                                <option value="">Select Category</option>
                              
                            </select>
                    
                        </div>
   
                        <div class="form-group">
                            <label for="">Enter Description</label>
                            <textarea wire:model.lazy='description' cols="30" rows="4" class="form-control"></textarea>
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter Status</label>
                            <select wire:model.lazy='status' class="form-control">
                                <option value="0">Not started</option>
                                <option value="1">Started</option>
                                <option value="2">Pending</option>
                                <option value="3">Complete</option>
                            </select>
                       
                        </div>
                        <div class="form-group">
                            <label for="">Enter Start Date</label>
                            <input type="date" wire:model.lazy='start_date' class="form-control form-control-lg">
                      
                        </div>
                        <div class="form-group">
                            <label for="">Enter End Date</label>
                            <input type="date" wire:model.lazy='end_date' class="form-control form-control-lg">
                        
                        </div>
                        <div class="form-group">
                            <label for="">Enter Users</label>
                            <select wire:model.lazy='user_id' class="form-control">
                                <option value="">Select User</option>
                
                            </select>
                      
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

        {{-- <div class="modal fade" id="updateTasks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">update the field</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
               
                <form action="" wire:submit.prevent='store'>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Enter Title</label>
                            <input type="text" wire:model.lazy='title' class="form-control form-control-lg">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter Category</label>
                            <select wire:model.lazy='cat_id' class="form-control">
                                <option value="">Select Category</option>
                              
                            </select>
                    
                        </div>
   
                        <div class="form-group">
                            <label for="">Enter Description</label>
                            <textarea wire:model.lazy='description' cols="30" rows="4" class="form-control"></textarea>
                           
                        </div>
                        <div class="form-group">
                            <label for="">Enter Status</label>
                            <select wire:model.lazy='status' class="form-control">
                                <option value="0">Not started</option>
                                <option value="1">Started</option>
                                <option value="2">Pending</option>
                                <option value="3">Complete</option>
                            </select>
                       
                        </div>
                        <div class="form-group">
                            <label for="">Enter Start Date</label>
                            <input type="date" wire:model.lazy='start_date' class="form-control form-control-lg">
                      
                        </div>
                        <div class="form-group">
                            <label for="">Enter End Date</label>
                            <input type="date" wire:model.lazy='end_date' class="form-control form-control-lg">
                        
                        </div>
                        <div class="form-group">
                            <label for="">Enter Users</label>
                            <select wire:model.lazy='user_id' class="form-control">
                                <option value="">Select User</option>
                
                            </select>
                      
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>


</div>




