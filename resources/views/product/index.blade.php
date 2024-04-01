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
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create-product">
                            <span><i class="fa fa-plus"></i></span> Create
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Collection</th>
                            <th>Image</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($product as $item)
                                <tr>
                                    <td style="text-align: center" width="5%">{{ $loop->iteration }}</td>
                                    <td width="20%">{{ $item->name }}</td>
                                    <td width="30%">{{ $item->collection->category->name }}</td>
                                    <td width="30%">{{ $item->collection->name }}</td>
                                    <td style="text-align: center">
                                        @if ($item->filename == null)
                                            -
                                        @else
                                            <a href="{{ asset('upload/product/'.$item->filename) }}" target="_blank">
                                                <img width="20%" src="{{ asset('upload/product/'.$item->filename) }}">
                                            </a>
                                        @endif
                                    </td>
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

  <div class="modal fade" id="create-product">
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
                                                <td><input type="text" name="inputs[0][name]" placeholder="Enter description" class="form-control"></td>
                                                <td><input type="text" name="inputs[0][value]" placeholder="Enter value" class="form-control"></td>
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
  <!-- /.modal -->

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

        });

        var i = 0;
        $('#add').click(function(){
            ++i;
            $('#table').append(
                `<tr>
                    <td>
                        <input type="text" name="inputs[`+i+`][name]" placeholder="Enter description" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="inputs[`+i+`][name]" placeholder="Enter description" class="form-control">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                    </td>
            `);
        });

        $(document).on('click','.remove-table-row', function(){
            $(this).parents('tr').remove();
        });

    </script>
@endpush
