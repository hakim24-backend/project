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
          <h1 class="m-0">Company</h1>
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
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create-company">
                            <span><i class="fa fa-plus"></i></span> Create
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                        <tr>
                            <th>No</th>
                            <th>Info Tittle</th>
                            <th>Info Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($company as $item)
                                <tr>
                                    <td style="text-align: center" width="5%">{{ $loop->iteration }}</td>
                                    <td width="30%">
                                        <table>
                                            <tr>
                                                <td>Tittle 1</td>
                                                <td>:</td>
                                                <td>{{$item->tittle1}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tittle 2</td>
                                                <td>:</td>
                                                <td>{{$item->tittle2}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tittle 3</td>
                                                <td>:</td>
                                                <td>{{$item->tittle3}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tittle 4</td>
                                                <td>:</td>
                                                <td>{{$item->tittle4}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tittle 5</td>
                                                <td>:</td>
                                                <td>{{$item->tittle5}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="30%">
                                        <table>
                                            <tr>
                                                <td>Description 1</td>
                                                <td>:</td>
                                                <td>{{$item->desc1}}</td>
                                            </tr>
                                            <tr>
                                                <td>Description 2</td>
                                                <td>:</td>
                                                <td>{{$item->desc2}}</td>
                                            </tr>
                                            <tr>
                                                <td>Description 3</td>
                                                <td>:</td>
                                                <td>{{$item->desc3}}</td>
                                            </tr>
                                            <tr>
                                                <td>Description 4</td>
                                                <td>:</td>
                                                <td>{{$item->desc4}}</td>
                                            </tr>
                                            <tr>
                                                <td>Description 5</td>
                                                <td>:</td>
                                                <td>{{$item->desc5}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="text-align: center" width="50%">
                                        @if ($item->filename == null)
                                            -
                                        @else
                                            <a href="{{ asset('upload/company/'.$item->filename) }}" target="_blank">
                                                <img width="40%" src="{{ asset('upload/company/'.$item->filename) }}">
                                            </a>
                                        @endif
                                    </td>
                                    <td style="text-align: center">
                                        <form action="{{route('company.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            <a title="Update Company" data-toggle="modal" data-target="#update-company{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span></a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete Company'><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                    @include('company.edit')
                                </tr>
                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="6"><b>Data company is empty</b></td>
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

  <div class="modal fade" id="create-company">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Collection</h4>
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
                <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tittle 1</label>
                                    <input name="tittle1" type="input" class="form-control @error('tittle1') is-invalid @enderror" placeholder="Enter Tittle 1" value="{{ old('tittle1') }}" required>
                                    @error('tittle1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description 1</label>
                                    <textarea name="description1" rows="5" class="form-control @error('description1') is-invalid @enderror" placeholder="Enter Description 1" required>{{ old('description1') }}</textarea>
                                    @error('description1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tittle 2</label>
                                    <input name="tittle2" type="input" class="form-control @error('tittle2') is-invalid @enderror" placeholder="Enter Tittle 1" value="{{ old('tittle2') }}" required>
                                    @error('tittle2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description 2</label>
                                    <textarea name="description2" rows="5" class="form-control @error('description2') is-invalid @enderror" placeholder="Enter Description 1" required>{{ old('description2') }}</textarea>
                                    @error('description2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tittle 3</label>
                                    <input name="tittle3" type="input" class="form-control @error('tittle3') is-invalid @enderror" placeholder="Enter Tittle 1" value="{{ old('tittle3') }}" required>
                                    @error('tittle3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description 3</label>
                                    <textarea name="description3" rows="5" class="form-control @error('description3') is-invalid @enderror" placeholder="Enter Description 1" required>{{ old('description3') }}</textarea>
                                    @error('description3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tittle 4</label>
                                    <input name="tittle4" type="input" class="form-control @error('tittle4') is-invalid @enderror" placeholder="Enter Tittle 1" value="{{ old('tittle4') }}" required>
                                    @error('tittle4')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description 4</label>
                                    <textarea name="description4" rows="5" class="form-control @error('description4') is-invalid @enderror" placeholder="Enter Description 1" required>{{ old('description4') }}</textarea>
                                    @error('description4')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tittle 5</label>
                                    <input name="tittle5" type="input" class="form-control @error('tittle5') is-invalid @enderror" placeholder="Enter Tittle 1" value="{{ old('tittle5') }}" required>
                                    @error('tittle5')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description 5</label>
                                    <textarea name="description5" rows="5" class="form-control @error('description5') is-invalid @enderror" placeholder="Enter Description 1" required>{{ old('description5') }}</textarea>
                                    @error('description5')
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
