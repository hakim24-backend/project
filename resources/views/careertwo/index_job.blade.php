<?php 
    use App\Models\CareerDetail;
    use App\Models\Resume;
?>

@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
@endpush

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Jobs {{$careertwo->name_company}}</h1>
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
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create-job">
                            <span><i class="fa fa-plus"></i></span> Create Job
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                        <tr>
                            <th width="5%">No</th>
                            <th>Name Job</th>
                            <th>Info Job</th>
                            <th>Detail Job</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($job as $item)
                                <tr>
                                    <td style="text-align: center; vertical-align: top;">{{ $loop->iteration }}</td>
                                    <td style="vertical-align: top;">{{$item->job}}</td>
                                    <td width="40%" style="vertical-align: middle;">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Requirements</td>
                                                <td>:</td>
                                                <td>{{$item->requirment}}</td>
                                            </tr>
                                            <tr>
                                                <td>Work Schedule</td>
                                                <td>:</td>
                                                <td>{{$item->schedule}}</td>
                                            </tr>
                                            <tr>
                                                <td>Day Off</td>
                                                <td>:</td>
                                                <td>{{$item->day_of}}</td>
                                            </tr>
                                            <tr>
                                                <td>Salary</td>
                                                <td>:</td>
                                                <td>@salary($item->salary)</td>
                                            </tr>
                                            <tr>
                                                <td>Workplace</td>
                                                <td>:</td>
                                                <td>{{$item->location}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="vertical-align: top;">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Description Workplace</td>
                                                <td>:</td>
                                                <td>{{$item->desc_location}}</td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>:</td>
                                                <td>{{$item->name_contact}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>:</td>
                                                <td>{{$item->phone_contact}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{$item->email_contact}}</td>
                                            </tr>
                                            <tr>
                                                <td>Website</td>
                                                <td>:</td>
                                                <td>{{$item->website_contact}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <form action="{{route('job.deleteJob', ['id' => $item->id, 'id_careertwo' => $careertwo->id])}}" method="POST">
                                            @csrf
                                            <a title="Update Job" data-toggle="modal" data-target="#update-job{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span></a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete Job'><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                    @include('careertwo.edit_job')
                                </tr>
                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="6"><b>Data job is empty</b></td>
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

  <div class="modal fade" id="create-job">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Job</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Info Job</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('job.storeJob', $careertwo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Job</label>
                                    <input name="job" type="input" class="form-control @error('job') is-invalid @enderror" placeholder="Enter Job" value="{{ old('job') }}" required>
                                    @error('job')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Requirements</label>
                                    <textarea name="requirment" rows="3" class="form-control @error('requirment') is-invalid @enderror" placeholder="Enter Requirements" required>{{ old('requirment') }}</textarea>
                                    @error('requirment')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Work Schedule</label>
                                    <input name="schedule" type="input" class="form-control @error('schedule') is-invalid @enderror" placeholder="Enter Work Schedule" value="{{ old('schedule') }}" required>
                                    @error('schedule')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Day Off</label>
                                    <input name="day_of" type="input" class="form-control @error('day_of') is-invalid @enderror" placeholder="Enter Day Off" value="{{ old('day_of') }}" required>
                                    @error('day_of')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input name="salary" type="number" class="form-control @error('salary') is-invalid @enderror" placeholder="Enter Salary" value="{{ old('salary') }}" required>
                                    @error('salary')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Location</label>
                                    <input name="location" type="input" class="form-control @error('location') is-invalid @enderror" placeholder="Enter Location" value="{{ old('location') }}" required>
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Detail Job</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description Workplace</label>
                                    <textarea name="desc_location" rows="3" class="form-control @error('desc_location') is-invalid @enderror" placeholder="Enter Desc Workplace" required>{{ old('desc_location') }}</textarea>
                                    @error('desc_location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name Contact</label>
                                    <input name="name_contact" type="input" class="form-control @error('name_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name_contact') }}" required>
                                    @error('name_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Contact</label>
                                    <input name="phone_contact" type="input" class="form-control @error('phone_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('phone_contact') }}" required>
                                    @error('phone_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Contact</label>
                                    <input name="email_contact" type="input" class="form-control @error('email_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('email_contact') }}" required>
                                    @error('email_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Website Contact</label>
                                    <input name="website_contact" type="input" class="form-control @error('website_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('website_contact') }}" required>
                                    @error('website_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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