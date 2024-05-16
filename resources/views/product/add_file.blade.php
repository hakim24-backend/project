<div class="modal fade" id="add-file{{$item->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload File PDF</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    {{-- <h3 class="card-title">Quick Example</h3> --}}
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('product.storeFile', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                    <div class="card-body">
                        <label>Upload File</label>
                        <input required style="padding: 3px" name="filename1" type="file" class="form-control @error('filename1') is-invalid @enderror" placeholder="Enter Name" value="{{ old('filename1') }}" required>
                        @error('filename1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <p style="font-size: 14px;"><i>*PDF</i></p>
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