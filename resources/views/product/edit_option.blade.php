<div class="modal fade" id="update-option{{$item->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Product Option</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-info">
                <div class="card-header">
                    {{-- <h3 class="card-title">Quick Example</h3> --}}
                </div>
                <!-- /.card-header -->
                <form action="{{ route('productoption.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Note</label>
                                <input name="note" type="input" class="form-control @error('note') is-invalid @enderror" placeholder="Enter Note" value="{{ old('note', $item->note) }}" required>
                                @error('note')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input style="padding: 3px" name="filename" type="file" class="form-control @error('filename') is-invalid @enderror" placeholder="Enter Name" value="{{ old('filename') }}">
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