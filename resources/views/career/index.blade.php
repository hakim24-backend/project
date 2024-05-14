@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Career</h1>
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
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create-careerier">
                            <span><i class="fa fa-plus"></i></span> Create
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="25%">Info Career</th>
                            <th>Detail Career</th>
                            <th width="25%">Image</th>
                            <th width="10%">Action</th>
                            {{-- <th>Job</th>
                            <th>Salary</th>
                            <th>Exp (years)</th>
                            <th>Office</th>
                            <th>Posted On</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Action</th> --}}
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($career as $item)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration }}</td>
                                    <td style="text-align: center">
                                        <table class="table job">
                                            <tbody>
                                                <tr>
                                                    <td width="20%" style="text-align: left">Job</td>
                                                    <td width="5%">:</td>
                                                    <td style="text-align: left">{{ $item->job }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Salary</td>
                                                    <td>:</td>
                                                    <td style="text-align: left">{{ $item->salary }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Exp (years)</td>
                                                    <td>:</td>
                                                    <td style="text-align: left">{{ $item->experience }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Office</td>
                                                    <td>:</td>
                                                    <td style="text-align: left">{{ $item->office }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Posted On</td>
                                                    <td>:</td>
                                                    <td style="text-align: left">{{ $item->date }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Type</td>
                                                    <td>:</td>
                                                    <td style="text-align: left">{{ $item->type }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Location</td>
                                                    <td>:</td>
                                                    <td style="text-align: left">{{ $item->location }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td style="text-align: center">-</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @if ($item->filename == null)
                                            -
                                        @else
                                            <a href="{{ asset('upload/career/'.$item->filename) }}" target="_blank">
                                                <img src="{{ asset('upload/career/'.$item->filename) }}">
                                            </a>
                                        @endif
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <form action="{{route('careerier.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            <a title="Update careerier" data-toggle="modal" data-target="#update-careerier{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span></a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete careerier'><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                    @include('career.edit')
                                </tr>
                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="6"><b>Data career is empty</b></td>
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

  <div class="modal fade" id="create-careerier">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Career</h4>
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
                <form action="{{ route('careerier.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Job</label>
                                    <input name="job" type="input" class="form-control @error('job') is-invalid @enderror" placeholder="Enter job" value="{{ old('job') }}" required>
                                    @error('job')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Office</label>
                                    <input name="office" type="input" class="form-control @error('office') is-invalid @enderror" placeholder="Enter office" value="{{ old('office') }}" required>
                                    @error('office')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input name="salary" type="number" class="form-control @error('salary') is-invalid @enderror" placeholder="Enter salary" value="{{ old('salary') }}" required>
                                    @error('salary')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input name="type" type="input" class="form-control @error('type') is-invalid @enderror" placeholder="Enter type" value="{{ old('type') }}" required>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Exp (years)</label>
                                    <input name="experience" type="number" class="form-control @error('experience') is-invalid @enderror" placeholder="Enter experience" value="{{ old('experience') }}" required>
                                    @error('experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input name="location" type="input" class="form-control @error('location') is-invalid @enderror" placeholder="Enter location" value="{{ old('location') }}" required>
                                    @error('location')
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
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    {{-- Page level custom scripts --}}
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
