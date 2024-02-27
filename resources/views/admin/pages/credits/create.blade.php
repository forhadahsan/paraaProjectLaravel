@extends('admin.layout')


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"> <a href="{{ route('credits.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('credits.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="form-label" for="basic-default-fullname">Project ID</label>
                    <select name="project_id" class="form-control" required>
                      <option value="">Select Document</option>
                      @foreach($projects as $project)
                      <option value="{{ $project->id }}">{{ $project->title }}</option>
                      @endforeach
                    </select>
                </div>
             
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">credits</label>
                <input type="text" name="credits" class="form-control" value="{{ old('credits') }}" placeholder="Enter credits" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">project_architects</label>
                <input type="text" name="project_architects" class="form-control" value="{{ old('project_architects') }}" placeholder="Enter project_architects" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">cost_consultant</label>
                <input type="text" name="cost_consultant" class="form-control" value="{{ old('cost_consultant') }}" placeholder="Enter cost_consultant" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date') }}" placeholder="Enter date" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">collaborating_architects</label>
                <input type="text" name="collaborating_architects" class="form-control" value="{{ old('collaborating_architects') }}" placeholder="Enter collaborating_architects" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">project_manager</label>
                <input type="text" name="project_manager" class="form-control" value="{{ old('project_manager') }}" placeholder="Enter project_manager" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">client</label>
                <input type="text" name="client" class="form-control" value="{{ old('client') }}" placeholder="Enter client" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">executing_architect</label>
                <input type="text" name="executing_architect" class="form-control" value="{{ old('executing_architect') }}" placeholder="Enter executing_architect" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">acoustics</label>
                <input type="text" name="acoustics" class="form-control" value="{{ old('acoustics') }}" placeholder="Enter acoustics" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">area</label>
                <input type="text" name="area" class="form-control" value="{{ old('area') }}" placeholder="Enter area" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">structural_engineer</label>
                <input type="text" name="structural_engineer" class="form-control" value="{{ old('structural_engineer') }}" placeholder="Enter structural_engineer" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">main_contraactor</label>
                <input type="text" name="main_contraactor" class="form-control" value="{{ old('main_contraactor') }}" placeholder="Enter main_contraactor" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">smith_jones_architecture</label>
                <input type="text" name="smith_jones_architecture" class="form-control" value="{{ old('smith_jones_architecture') }}" placeholder="Enter smith_jones_architecture" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">services_engineer</label>
                <input type="text" name="services_engineer" class="form-control" value="{{ old('services_engineer') }}" placeholder="Enter services_engineer" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">awards</label>
                <input type="text" name="awards" class="form-control" value="{{ old('awards') }}" placeholder="Enter awards" />
              </div>
               
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Status</label>
                <select name="status" class="form-control" required>
                  <option value="1">Publish</option>
                  <option value="0">Not Publish</option>
                </select>
              </div>
              
            </div>
            <div class="mb-3">
              
            </div>

            <button type="submit" style="float: right;" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@push('js')

@endpush
