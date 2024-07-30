@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
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
          <h1 class="m-0">Product : {{$product->name}}</h1>
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
                    </div>
                    <div class="card-header">
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create-productoption">
                            <span><i class="fa fa-plus"></i></span> Create
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead style="text-align: center">
                            <tr>
                                <th>No</th>
                                <th>Note</th>
                                <th>Filename</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($productoption as $item)
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;">{{ $loop->iteration }}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $item->note }}</td>
                                        <td style="text-align: center" width="30%">
                                            <a target="_blank" href="{{asset('upload/product_option/'.$item->filename)}}">
                                                <img width="30%" src="{{asset('upload/product_option/'.$item->filename)}}" alt="">
                                            </a>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <form action="{{route('productoption.destroy', $item->id)}}" method="POST">
                                                @csrf
                                                <a title="Update Product Option" data-toggle="modal" data-target="#update-option{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span></a>
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete Resume'><span class="fa fa-trash"></span></button>
                                            </form>
                                        </td>
                                        @include('product.edit_option')
                                    </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="6"><b>Data productoption is empty</b></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table><br>
                        <a class="btn btn-danger" href="{{route('product.index')}}">Back</a>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
  </div>

  <div class="modal fade" id="create-productoption">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Small Door</h4>
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
                <form action="{{ route('productoption.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="id_product" value="{{$product->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Note</label>
                            <input name="note" type="input" class="form-control @error('note') is-invalid @enderror" placeholder="Enter Note" value="{{ old('note') }}" required>
                            @error('note')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Upload Image</label>
                            <input required style="padding: 3px" name="filename" type="file" class="form-control @error('filename') is-invalid @enderror" placeholder="Enter Name" value="{{ old('filename') }}" required>
                            @error('filename')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <p style="font-size: 14px;"><i>*JPG/JPEG/PNG</i></p>
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
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
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
