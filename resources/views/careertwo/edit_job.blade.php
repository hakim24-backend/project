<div class="modal fade" id="update-job{{$item->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Job</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Info Job</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('job.updateJob', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Job</label>
                                    <input name="job" type="input" class="form-control @error('job') is-invalid @enderror" placeholder="Enter Job" value="{{ old('job', $item->job) }}" required>
                                    @error('job')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Requirements</label>
                                    <textarea name="requirment" rows="3" class="form-control @error('requirment') is-invalid @enderror" placeholder="Enter Requirements" required>{{ old('requirment', $item->requirment) }}</textarea>
                                    @error('requirment')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Work Schedule</label>
                                    <input name="schedule" type="input" class="form-control @error('schedule') is-invalid @enderror" placeholder="Enter Work Schedule" value="{{ old('schedule', $item->schedule) }}" required>
                                    @error('schedule')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Day Off</label>
                                    <input name="day_of" type="input" class="form-control @error('day_of') is-invalid @enderror" placeholder="Enter Day Off" value="{{ old('day_of', $item->day_of) }}" required>
                                    @error('day_of')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input name="salary" type="number" class="form-control @error('salary') is-invalid @enderror" placeholder="Enter Salary" value="{{ old('salary', $item->salary) }}" required>
                                    @error('salary')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Location</label>
                                    <input name="location" type="input" class="form-control @error('location') is-invalid @enderror" placeholder="Enter Location" value="{{ old('location', $item->location) }}" required>
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Detail Job</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description Workplace</label>
                                    <textarea name="desc_location" rows="3" class="form-control @error('desc_location') is-invalid @enderror" placeholder="Enter Desc Workplace" required>{{ old('desc_location', $item->desc_location) }}</textarea>
                                    @error('desc_location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name Contact</label>
                                    <input name="name_contact" type="input" class="form-control @error('name_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name_contact', $item->name_contact) }}" required>
                                    @error('name_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Contact</label>
                                    <input name="phone_contact" type="input" class="form-control @error('phone_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('phone_contact', $item->name_contact) }}" required>
                                    @error('phone_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Contact</label>
                                    <input name="email_contact" type="input" class="form-control @error('email_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('email_contact', $item->email_contact) }}" required>
                                    @error('email_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Website Contact</label>
                                    <input name="website_contact" type="input" class="form-control @error('website_contact') is-invalid @enderror" placeholder="Enter Name" value="{{ old('website_contact', $item->website_contact) }}" required>
                                    @error('website_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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