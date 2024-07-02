<div class="modal fade" id="update-company{{$item->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Company</h4>
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
                <form action="{{ route('company.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tittle 1</label>
                                        <input name="tittle1" type="input" class="form-control @error('tittle1') is-invalid @enderror" placeholder="Enter Tittle 1" value="{{ old('tittle1', $item->tittle1) }}" required>
                                        @error('tittle1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description 1</label>
                                        <textarea name="description1" rows="5" class="form-control @error('description1') is-invalid @enderror" placeholder="Enter Description 1" required>{{ old('description1', $item->desc1) }}</textarea>
                                        @error('description1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tittle 2</label>
                                        <input name="tittle2" type="input" class="form-control @error('tittle2') is-invalid @enderror" placeholder="Enter Tittle 2" value="{{ old('tittle2', $item->tittle2) }}" required>
                                        @error('tittle2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description 2</label>
                                        <textarea name="description2" rows="5" class="form-control @error('description2') is-invalid @enderror" placeholder="Enter Description 2" required>{{ old('description2', $item->desc2) }}</textarea>
                                        @error('description2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tittle 3</label>
                                        <input name="tittle3" type="input" class="form-control @error('tittle3') is-invalid @enderror" placeholder="Enter Tittle 3" value="{{ old('tittle3', $item->tittle3) }}" required>
                                        @error('tittle3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description 3</label>
                                        <textarea name="description3" rows="5" class="form-control @error('description3') is-invalid @enderror" placeholder="Enter Description 3" required>{{ old('description3', $item->desc3) }}</textarea>
                                        @error('description3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tittle 4</label>
                                        <input name="tittle4" type="input" class="form-control @error('tittle4') is-invalid @enderror" placeholder="Enter Tittle 4" value="{{ old('tittle4', $item->tittle4) }}" required>
                                        @error('tittle4')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                        <label>Description 4</label>
                                        <textarea name="description4" rows="5" class="form-control @error('description4') is-invalid @enderror" placeholder="Enter Description 4" required>{{ old('description4', $item->desc4) }}</textarea>
                                        @error('description4')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tittle 5</label>
                                        <input name="tittle5" type="input" class="form-control @error('tittle5') is-invalid @enderror" placeholder="Enter Tittle 5" value="{{ old('tittle5', $item->tittle5) }}" required>
                                        @error('tittle5')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description 5</label>
                                        <textarea name="description5" rows="5" class="form-control @error('description5') is-invalid @enderror" placeholder="Enter Description 5" required>{{ old('description5', $item->desc5) }}</textarea>
                                        @error('description5')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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