<?php 
    use App\Models\DetailCareertwo;
    use App\Models\Resumetwo;
?>

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
          <h1 class="m-0">Career Model 2</h1>
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
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create-careertwo">
                            <span><i class="fa fa-plus"></i></span> Create Company
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead style="text-align: center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="25%">Name Company</th>
                            <th>Info Company</th>
                            <th>Photo</th>
                            <th width="10%">Total Resume</th>
                            <th width="10%">Action Job</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($careertwo as $item)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration }}</td>
                                    <td style="text-align: left">{{$item->name_company}}</td>
                                    <td style="text-align: left">{{$item->info_company}}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @if ($item->filename == null)
                                            -
                                        @else
                                            <a href="{{ asset('upload/careertwo/'.$item->filename) }}" target="_blank">
                                                <img width="40%" src="{{ asset('upload/careertwo/'.$item->filename) }}">
                                            </a>
                                        @endif
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @php
                                            $resume = Resumetwo::select('resumetwo.*')
                                            ->join('detail_careertwos', 'detail_careertwos.id', '=', 'resumetwos.id_detail_careertwo')
                                            ->where('id_careertwo', $item->id)
                                            ->count();
                                        @endphp
                                        <a href="{{route('job.resume', $item->id)}}" class="btn btn-info"><span><i class="fa fa-briefcase"></i></span> Resume <span class="badge badge-danger">{{$resume}}</span></a>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @php
                                            $job = DetailCareertwo::where('id_careertwo', $item->id)->count();
                                        @endphp
                                        <a href="{{route('job.index', $item->id)}}" class="btn btn-success"><span><i class="fa fa-briefcase"></i></span> Jobs <span class="badge badge-danger">{{$job}}</span></a>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <form action="{{route('careertwo.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            <a title="Update Career Model 2" data-toggle="modal" data-target="#update-careertwo{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span></a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete Career Model 2'><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                    @include('careertwo.edit')
                                </tr>
                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="6"><b>Data career model 2 is empty</b></td>
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

  <div class="modal fade" id="create-careertwo">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Career Model 2</h4>
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
                <form action="{{ route('careertwo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name Company</label>
                                    <input name="name_company" type="input" class="form-control @error('name_company') is-invalid @enderror" placeholder="Enter Name Company" value="{{ old('name_company') }}" required>
                                    @error('name_company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Info Company</label>
                                    <input name="info_company" type="input" class="form-control @error('info_company') is-invalid @enderror" placeholder="Enter Info Company" value="{{ old('info_company') }}" required>
                                    @error('info_company')
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
