@extends('admin.layout')
@push('css')
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
  .dialogelfinder {
      z-index: 20000;
  }
  .note-editor {
  z-index: 0;
}
.fullscreen{
  background-color: #fff;
}
.note-toolbar {
    z-index: auto;
 }
</style>
@endpush

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
          <form action="{{ route('credits.update', $carriers->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                <label class="form-label" for="basic-default-fullname">Credits</label>
                <input type="text" name="credits" class="form-control" value="{{ old('credits') }}" placeholder="Enter credits" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">project_architects</label>
                <input type="text" name="project_architects" class="form-control" value="{{ old('project_architects') }}" placeholder="Enter project_architects" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Cost_consultant</label>
                <input type="text" name="cost_consultant" class="form-control" value="{{ old('cost_consultant') }}" placeholder="Enter cost_consultant" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date') }}" placeholder="Enter date" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Collaborating_architects</label>
                <input type="text" name="collaborating_architects" class="form-control" value="{{ old('collaborating_architects') }}" placeholder="Enter collaborating_architects" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Project_manager</label>
                <input type="text" name="project_manager" class="form-control" value="{{ old('project_manager') }}" placeholder="Enter project_manager" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Client</label>
                <input type="text" name="client" class="form-control" value="{{ old('client') }}" placeholder="Enter client" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Executing_architect</label>
                <input type="text" name="executing_architect" class="form-control" value="{{ old('executing_architect') }}" placeholder="Enter executing_architect" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Acoustics</label>
                <input type="text" name="acoustics" class="form-control" value="{{ old('acoustics') }}" placeholder="Enter acoustics" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Area</label>
                <input type="text" name="area" class="form-control" value="{{ old('area') }}" placeholder="Enter area" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Structural_engineer</label>
                <input type="text" name="structural_engineer" class="form-control" value="{{ old('structural_engineer') }}" placeholder="Enter structural_engineer" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Main_contraactor</label>
                <input type="text" name="main_contraactor" class="form-control" value="{{ old('main_contraactor') }}" placeholder="Enter main_contraactor" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Smith_jones_architecture</label>
                <input type="text" name="smith_jones_architecture" class="form-control" value="{{ old('smith_jones_architecture') }}" placeholder="Enter smith_jones_architecture" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Services_engineer</label>
                <input type="text" name="services_engineer" class="form-control" value="{{ old('services_engineer') }}" placeholder="Enter services_engineer" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Awards</label>
                <input type="text" name="awards" class="form-control" value="{{ old('awards') }}" placeholder="Enter awards" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Status</label>
                <select name="status" class="form-control" required>
                  <option value="1" {{ $carriers->status == 1? 'selected' : '' }}>Publish</option>
                  <option value="0" {{ $carriers->status == 0? 'selected' : '' }}>Not Publish</option>
                </select>
              </div>
              {{-- <div class="col-sm-6">
                <label for="">Image</label>
                @if($cadse->image)
                <br>
                <img src="{{ url('storage/uploads/carriers/'.$cadse->image) }}" width="60" />
                <br>
                @endif
                <input type="file" class="form-control" name="image" />
              </div> --}}
       
            </div>

            <div class="mb-3">
              <label for="">Description</label>
              <textarea class="form-control" name="description" id="summernote">{{ $carriers->description }}</textarea>
            </div>
            <div class="mb-3">
              
            </div>

            <button type="submit" style="float: right;" class="btn btn-primary"> Update Save </button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      placeholder: 'carriers Description',
        tabsize: 2,
        height: 300,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul','ol','paragraph']],
            ["view", ["fullscreen", "codeview"]]
        ],
    });
     $('i.note-recent-color').each(function(){
               $(this).attr('style','background-color: transparent;');
            });

    if ($('.note-editor .note-toolbar').length) {
  var z_index = 900;
  $(".note-editor .note-toolbar").each(function(){
  $(this).css({'z-index': z_index});
  z_index--;
  });
}
    
  });
  
</script>
@endpush
