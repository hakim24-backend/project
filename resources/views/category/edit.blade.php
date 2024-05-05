<div class="modal fade" id="update-category{{$item->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Category</h4>
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
                <form action="{{ route('category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name Category</label>
                            <input name="name" type="input" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name', $item->name) }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label>Description Collection</label>
                          <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description">{{ old('description', $item->description) }}</textarea>
                          @error('description')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
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