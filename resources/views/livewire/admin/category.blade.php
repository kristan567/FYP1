

<div>
    <!-- jQuery -->
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
  

    <x-slot:title>
    Categories
    </x-slot:title>

    @include('livewire.components.createCategory')
    @include('livewire.components.updateCategory')

    <div class="container">
        <div class="card my-4">
            <div class="card-header bg-danger">
                <div class="d-flex justify-content-between">
                    <h3>Category list</h3>
                    <button data-toggle="modal" data-target="#addCategory" class="btn btn-secondary" >Add Category</button>
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex">
                    @if (Auth::guard('admin')->user())
                        <a href="{{ route('admin.exportPDF') }}">
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
                                <th>Category Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                   
  

                            @if (count($categories))

                                @foreach ($categories as $category)
                                        
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td><button wire:click='editCategory({{ $category->id }})' data-toggle="modal" data-target="#updateCategory" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                        <td><button wire:click='deleteCategory({{ $category->id }})' class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                                    </tr>

                                @endforeach
                                
                            @else
                            <h4>Record Not Found</h4>
                                
                            @endif
                            
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="card-body">
                {{ $categories->links('custom-pagination-links-view') }}


                
            </div>

        </div>

              
      
        
 

        {{-- <div class="modal fade" id="updateCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="">Enter Category Name</label>
                                <input type="text" class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                                <label for="">Enter Description</label>
                                <textarea cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </form>
            </div>
            </div>
        </div> --}}



        
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



