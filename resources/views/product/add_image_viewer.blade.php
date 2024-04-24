<div class="modal fade" id="add-image{{$item->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload File Image Viewer</h4>
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
                <form action="{{ route('product.storeDetail', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                    <div class="card-body">
                        <label>Upload Image</label>
                        <input required style="padding: 3px" name="detail_filename" type="file" class="form-control @error('detail_filename') is-invalid @enderror" placeholder="Enter Name" value="{{ old('detail_filename') }}" required>
                        @error('detail_filename')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <p style="font-size: 14px;"><i>*JPG/JPEG/PNG</i></p>
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