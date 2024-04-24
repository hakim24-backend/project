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
                        Update Description
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form action="{{ route('product.storeDescription', $product->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <table class="table table-bordered" id="table">
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                            <?php $index=0; ?>
                            @foreach ($description as $key => $item)
                            <tr>
                                <td><input required type="text" name="inputs[{{$key}}][name]" placeholder="Enter description" class="form-control" value="{{$item->name}}"></td>
                                <td><input required type="text" name="inputs[{{$key}}][value]" placeholder="Enter value" class="form-control" value="{{$item->value}}"></td>

                                @if ($key == 0)
                                  <td><button type="button" name="add" id="add" class="btn btn-success">Add Description</button></td>
                                @else
                                  <td><button type="button" class="btn btn-danger remove-table-row">Remove</button></td>
                                @endif
                            </tr>
                            <?php $index++ ?>
                            @endforeach
                        </table>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a class="btn btn-danger" href="{{route('product.index')}}">Cancel</a>
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

    {{-- Page level custom scripts --}}
    <script>
      var i = <?= $index ?> - 1;
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

      $(document).on('click','.remove-table-row', function(){
          $(this).parents('tr').remove();
      });
    </script>
@endpush
