<div class="modal fade" id="update-category{{$item->id}}">
    <div class="modal-dialog modal-xl">
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
                            <label>Name Menu Category</label>
                            <select name="name1" class="form-control @error('name1') is-invalid @enderror">
                              <option value="" disabled {{ $item->name1 == null ? 'selected' : '' }}>Select Menu Category</option>
                              <option value="МЕБЕЛЬНЫЕ КОМПЛЕКТУЮЩИЕ" {{ $item->name1 == 'МЕБЕЛЬНЫЕ КОМПЛЕКТУЮЩИЕ' ? 'selected' : '' }}>МЕБЕЛЬНЫЕ КОМПЛЕКТУЮЩИЕ</option>
                              <option value="ПЛИТНЫЕ МАТЕРИАЛЫ" {{ $item->name1 == 'ПЛИТНЫЕ МАТЕРИАЛЫ' ? 'selected' : '' }}>ПЛИТНЫЕ МАТЕРИАЛЫ</option>
                              <option value="СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ" {{ $item->name1 == 'СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ' ? 'selected' : '' }}>СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ</option>
                              <option value="ИЗДЕЛИЯ ИЗ ДРЕВЕСИНЫ" {{ $item->name1 == 'ИЗДЕЛИЯ ИЗ ДРЕВЕСИНЫ' ? 'selected' : '' }}>ИЗДЕЛИЯ ИЗ ДРЕВЕСИНЫ</option>
                              <option value="КОМПАНИЯ" {{ $item->name1 == 'КОМПАНИЯ' ? 'selected' : '' }}>КОМПАНИЯ</option>
                            </select>
                            @error('name1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Name Submenu Category</label>
                            <input name="name" type="input" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Submenu" value="{{ old('name', $item->name) }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label>Description Collection</label>
                          <textarea id="summernote_update{{$item->id}}" name="description">{!! $item->description !!}</textarea>
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