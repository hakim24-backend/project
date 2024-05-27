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
          <h1 class="m-0">Detail Career</h1>
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
                        Add Detail
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form action="{{ route('career.updateDetail', $careerDetail->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Job Description</label>
                                    <textarea id="summernote" name="desc_job">{!! $careerDetail->desc_job !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Location Description</label>
                                    <textarea id="summernote1" name="desc_location">{!! $careerDetail->desc_location !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Add Contact Detail
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name Contact</label>
                                <input name="name_contact" type="input" class="form-control @error('name_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name_contact', $careerDetail->name_contact) }}" required>
                                @error('name_contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Phone Contact</label>
                                <input name="phone_contact" type="input" class="form-control @error('phone_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('phone_contact', $careerDetail->phone_contact) }}" required>
                                @error('phone_contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email Contact</label>
                                <input name="email_contact" type="input" class="form-control @error('email_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('email_contact', $careerDetail->email_contact) }}" required>
                                @error('email_contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Website Contact</label>
                                <input name="website_contact" type="input" class="form-control @error('website_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('website_contact', $careerDetail->website_contact) }}" required>
                                @error('website_contact')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a class="btn btn-danger" href="{{route('careerier.index')}}">Cancel</a>
                      </form>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
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
    <script>
        $(function () {
            // // Summernote
            $('#summernote').summernote()
            $('#summernote1').summernote()

            // // CodeMirror
            // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            // mode: "htmlmixed",
            // theme: "monokai"
            // });

            $('#summernote').next().on('focusout', ".note-codable", function() {
                if ($('#summernote').summernote('codeview.isActivated')) {
                    $('#summernote').summernote('codeview.deactivate');
                }
            });

            $('#summernote1').next().on('focusout', ".note-codable", function() {
                if ($('#summernote1').summernote('codeview.isActivated')) {
                    $('#summernote1').summernote('codeview.deactivate');
                }
            });
        })
    </script>
@endpush
