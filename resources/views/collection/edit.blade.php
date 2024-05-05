<div class="modal fade" id="update-collection{{$item->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Collection</h4>
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
                <form action="{{ route('collection.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Category</label>
                                    <select required id="select_category_update{{$item->id}}" name="id_category_update" class="form-control select2 select2-success  @error('id_category_update') is-invalid @enderror" data-dropdown-css-class="select2-success">
                                        <option selected="selected" value="{{$item->category->id}}">{{$item->category->name}}</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name Collection</label>
                                        <input name="name" type="input" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name', $item->name) }}" required>
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
                                            <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description">{{ old('description', $item->description) }}</textarea>
                                            @error('description')
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