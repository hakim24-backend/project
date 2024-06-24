<?php 
    use App\Models\TypicalCollection;
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
          <h1 class="m-0">Collection</h1>
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
                        <button type="button" class="btn bg-gradient-success" data-toggle="modal" data-target="#create-collection">
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
                            <th>Description</th>
                            <th>Typical</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($collection as $item)
                                <tr>
                                    <td style="text-align: center" width="5%">{{ $loop->iteration }}</td>
                                    <td width="20%">{{ $item->name }}</td>
                                    <td width="10%">{{ $item->category->name }}</td>
                                    <td width="20%">
                                        @if ($item->description == "" || $item->description == null || $item->description == "-")
                                            {{-- no action --}}
                                        @else
                                            {!! $item->description !!}
                                        @endif
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @php
                                            $cekTypical = TypicalCollection::where('id_collection', $item->id)->first();
                                        @endphp

                                        @if ($cekTypical == null)
                                            <a href="{{route('typicalCollection.addTypical', $item->id)}}" class="btn btn-success"><span><i class="fa fa-plus"></i></span> Add Typical</a>
                                        @else
                                            <a href="{{route('typicalCollection.addTypical', $item->id)}}" class="btn btn-info"><span><i class="fa fa-edit"></i></span> Update Typical</a>
                                        @endif
                                    </td>
                                    <td style="text-align: center" width="50%">
                                        @if ($item->filename == null)
                                            -
                                        @else
                                            <a href="{{ asset('upload/collection/'.$item->filename) }}" target="_blank">
                                                <img width="20%" src="{{ asset('upload/collection/'.$item->filename) }}">
                                            </a>
                                        @endif
                                    </td>
                                    <td style="text-align: center">
                                        <form action="{{route('collection.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            <a title="Update Collection" data-toggle="modal" data-target="#update-collection{{ $item->id }}" class="btn btn-info" href=""><span class="fa fa-edit"></span></a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete Collection'><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                    @include('collection.edit')
                                </tr>
                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="6"><b>Data collection is empty</b></td>
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

  <div class="modal fade" id="create-collection">
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
                <form action="{{ route('collection.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Category</label>
                                <select required id="select_category" name="id_category" class="form-control select2 select2-success  @error('id_category') is-invalid @enderror" data-dropdown-css-class="select2-success">
                                {{-- <select required id="select_category" name="category" class="form-control select2bs4" style="width: 100%;"> --}}
                                    
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name Collection</label>
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
                                    <label>Description Collection</label>
                                        <textarea id="summernote" name="description"></textarea>
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
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

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
            
            const numbers = [<?= $dataSelect2 ?>];
            numbers.forEach(myFunction);
            function myFunction(item) {
                $('#select_category_update'+item).select2({
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
            }

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

        $(function () {
            
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
            });
        })

        const numbers = [<?= $dataSummernote ?>];
            numbers.forEach(myFunction);
            function myFunction(item) {
                $(function () {
            
                    // Summernote
                    $('#summernote_update'+item).summernote()

                    // CodeMirror
                    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                    mode: "htmlmixed",
                    theme: "monokai"
                    });
                })       
        }

        const numbers1 = [<?= $dataSummernote ?>];
            numbers1.forEach(myFunctions);
            function myFunctions(item) {
                $(function () {
                    $('#summernote_update'+item).next().on('focusout', ".note-codable", function() {
                        if ($('#summernote_update'+item).summernote('codeview.isActivated')) {
                            $('#summernote_update'+item).summernote('codeview.deactivate');
                        }
                    });
                })       
        }

    </script>
@endpush
