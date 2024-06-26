<?php 
    use App\Models\Smalldoor;
?>

@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 17px;
        }
    </style>
@endpush

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Product</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create">
                            <span><i class="fa fa-plus"></i></span> Create
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered">
                        <thead style="text-align: center">
                        <tr>
                            <th>No</th>
                            <th>Info Product</th>
                            <th>Info Description Product</th>
                            <th>View Documentation / Photo</th>
                            <th>Action Documentation / Photo</th>
                            <th>Action Product</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($product as $item)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle">{{$loop->iteration}}</td>
                                    <td width="15%" style="vertical-align: middle;">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td width="5%">Name Product</td>
                                                <td width="1%" style="text-align: center">:</td>
                                                <td width="15%">{{ $item->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Category Product</td>
                                                <td style="text-align: center">:</td>
                                                <td>{{ $item->collection->category->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Collection Product</td>
                                                <td style="text-align: center">:</td>
                                                <td>{{ $item->collection->name }}</td>
                                            </tr>
                                            @if ($item->collection->category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ')
                                            <tr>
                                                <td>Other Decor</td>
                                                <td style="text-align: center">:</td>
                                                <td>
                                                    @php
                                                        $smalldoor = Smalldoor::where('id_product', $item->id)->count();
                                                    @endphp
                                                    <a href="{{route('smalldoor.show', $item->id)}}" class="btn btn-warning"><span><i class="fa fa-th-large"></i></span> Small <span class="badge badge-danger">{{$smalldoor}}</span></a>
                                                </td>
                                            </tr>
                                            @endif
                                        </table>
                                    </td>
                                    <td width="20%" style="vertical-align: middle;">
                                        <table class="table table-bordered">
                                            <tbody>
                                                @foreach ($item->description()->get() as $desc)
                                                <tr>
                                                    <td width="15%"> {{$desc->name}} </td>
                                                    <td width="15%"> {{$desc->value}} </td>
                                                </tr>
                                               @endforeach
                                               <tr>
                                                    <td style="text-align: center" colspan="2"><a title="Update Description" class="btn btn-info" href="{{route('product.edit', $item->id)}}"><span class="fa fa-edit"></span> Update Description</a></td>
                                               </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="23%" style="vertical-align: middle;">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Image Product</td>
                                                <td style="text-align: center">:</td>
                                                <td style="text-align: center">
                                                    @if ($item->filename == null)
                                                        -
                                                    @else
                                                        <a href="{{ asset('upload/product/'.$item->filename) }}" target="_blank">
                                                            <span class="btn btn-dark">View Product</span>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>File Product</td>
                                                <td style="text-align: center">:</td>
                                                <td style="text-align: center">
                                                    @if ($item->filename1 == null)
                                                        -
                                                    @else
                                                        <a href="{{ asset('upload/product_file/'.$item->filename1) }}" target="_blank">
                                                            <span class="btn btn-dark">View File</span>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>File Image Viewer</td>
                                                <td style="text-align: center">:</td>
                                                <td style="text-align: center">
                                                    @if ($item->detail_filename == null)
                                                        -
                                                    @else
                                                        <a href="{{ asset('upload/detail_product/'.$item->detail_filename) }}" target="_blank">
                                                            <span class="btn btn-dark">View Image Viewer</span>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="23%" style="vertical-align: middle;">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Image Product</td>
                                                <td style="text-align: center">:</td>
                                                <td style="text-align: center">
                                                    @if ($item->filename == null)
                                                        -
                                                    @else
                                                        <a title="Update Product" data-toggle="modal" data-target="#update-product{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span> Update Image</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>File Product</td>
                                                <td style="text-align: center">:</td>
                                                <td style="text-align: center">
                                                    @if ($item->filename1 == null)
                                                        <a title="Add File" data-toggle="modal" data-target="#add-file{{ $item->id }}" class="btn btn-success" href=""><span class="fa fa-plus"></span> Add File</a>
                                                    @else
                                                        <a title="Update File" data-toggle="modal" data-target="#update-file{{ $item->id }}" class="btn btn-success" href=""><span class="fa fa-edit"></span> Update File</a><br>
                                                        <form action="{{route('product.deleteFile', $item->id)}}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete File'><span class="fa fa-trash"></span> Delete File</button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>File Image Viewer</td>
                                                <td style="text-align: center">:</td>
                                                <td style="text-align: center">
                                                    @if ($item->detail_filename == null)
                                                        <a title="Add Image Viewer" data-toggle="modal" data-target="#add-image{{ $item->id }}" class="btn btn-success" href=""><span class="fa fa-plus"></span> Add Image</a>
                                                    @else
                                                        <a title="Update Image Viewer" data-toggle="modal" data-target="#update-image{{ $item->id }}" class="btn btn-success" href=""><span class="fa fa-edit"></span> Update Image</a><br>
                                                        <form action="{{route('product.deleteDetailImage', $item->id)}}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete Image Viewer'><span class="fa fa-trash"></span> Delete Image</button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle">
                                            <form action="{{route('product.destroy', $item->id)}}" method="POST">
                                                @csrf
                                                <a title="Update Product" data-toggle="modal" data-target="#update-product{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span></a>
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete Product'><span class="fa fa-trash"></span></button>
                                            </form>
                                    </td>
                                    @include('product.edit')
                                    @include('product.add_image_viewer')
                                    @include('product.add_file')
                                    @include('product.edit_image_viewer')
                                    @include('product.edit_file')
                                    {{-- @include('product.edit_description') --}}
                                </tr>
                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="6"><b>Data product is empty</b></td>
                            </tr>
                            @endforelse
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
  </div>

  <div class="modal fade" id="create-with-collection">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Product With Collection</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header">
                    {{-- <h3 class="card-title">Quick Example</h3> --}}
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Collection</label>
                                <select required id="select_collection" name="id_collection" class="form-control select2 select2-success  @error('id_selection') is-invalid @enderror" data-dropdown-css-class="select2-success">
                                {{-- <select required id="select_category" name="category" class="form-control select2bs4" style="width: 100%;"> --}}
                                    
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name Product</label>
                                    <input name="name" type="input" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input required style="padding: 3px" name="filename" type="file" class="form-control @error('filename') is-invalid @enderror" placeholder="Enter Name" value="{{ old('filename') }}" required>
                                        @error('filename')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <p style="font-size: 14px;"><i>*JPG/JPEG/PNG</i></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <table class="table table-bordered" id="table">
                                            <tr>
                                                <th>Name</th>
                                                <th>Value</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><input required type="text" name="inputs[0][name]" placeholder="Enter description" class="form-control"></td>
                                                <td><input required type="text" name="inputs[0][value]" placeholder="Enter value" class="form-control"></td>
                                                <td><button type="button" name="add" id="add" class="btn btn-success">Add Description</button></td>
                                            </tr>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="create-with-category">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Product With Category</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header">
                    {{-- <h3 class="card-title">Quick Example</h3> --}}
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('product.storeWithCategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select required id="select_category" name="id_category" class="form-control select2 select2-success" data-dropdown-css-class="select2-success">
                                {{-- <select required id="select_category" name="category" class="form-control select2bs4" style="width: 100%;"> --}}
                                    
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name Product</label>
                                    <input name="name" type="input" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input required style="padding: 3px" name="filename" type="file" class="form-control @error('filename') is-invalid @enderror" placeholder="Enter Name" value="{{ old('filename') }}" required>
                                        @error('filename')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <p style="font-size: 14px;"><i>*JPG/JPEG/PNG</i></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <table class="table table-bordered" id="table1">
                                            <tr>
                                                <th>Name</th>
                                                <th>Value</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><input required type="text" name="inputs[0][name]" placeholder="Enter description" class="form-control"></td>
                                                <td><input required type="text" name="inputs[0][value]" placeholder="Enter value" class="form-control"></td>
                                                <td><button type="button" name="add" id="add1" class="btn btn-success">Add Description</button></td>
                                            </tr>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="create">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header">
                    {{-- <h3 class="card-title">Quick Example</h3> --}}
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <a type="button" class="btn btn-info form-control create-with-collection" data-dismiss="modal" data-toggle="modal" href="#create-with-collection">Create With Collection</a>
                            </div>
                            <div class="col-md-6">
                                <a type="button" class="btn btn-danger form-control create-with-category" data-dismiss="modal" data-toggle="modal" href="#create-with-category">Crete With Category</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    </div>
                </div>
                <!-- /.card -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@push('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src=" {{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    {{-- Page level custom scripts --}}
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });

        $(document).ready(function () {

            // Select2 Single  with Placeholder
            $('#select_collection').select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-collection') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

            const numbers = [<?= $dataSelect2 ?>];
            numbers.forEach(myFunction);
            function myFunction(item) {
                $('#select_collection_update'+item).select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-collection') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
            }

            // Select2 Single  with Placeholder
            $('#select_category').select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-category') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

        });

        var i = 0;
        $('#add').click(function(){
            ++i;
            $('#table').append(
                `<tr>
                    <td>
                        <input required type="text" name="inputs[`+i+`][name]" placeholder="Enter description" class="form-control">
                    </td>
                    <td>
                        <input required type="text" name="inputs[`+i+`][value]" placeholder="Enter value" class="form-control">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                    </td>
            `);
        });

        var indeks = 0;
        $('#add1').click(function(){
            ++indeks;
            $('#table1').append(
                `<tr>
                    <td>
                        <input required type="text" name="inputs[`+indeks+`][name]" placeholder="Enter description" class="form-control">
                    </td>
                    <td>
                        <input required type="text" name="inputs[`+indeks+`][value]" placeholder="Enter value" class="form-control">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-table-row-1">Remove</button>
                    </td>
            `);
        });

        $(document).on('click','.remove-table-row', function(){
            $(this).parents('tr').remove();
        });

        $(document).on('click','.remove-table-row-1', function(){
            $(this).parents('tr').remove();
        });

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                } else {
                    return false;
                }
            });
        });

    </script>
@endpush
