@extends('admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">{{$title}}
      <a class="btn btn-primary" href="{{ route('credits.create') }}" style="float: right;">  Add <i class="bx bx-plus me-1"></i></a>
    </h5>
    
    <div class="table-responsive text-nowrap">
        <table class="table" id="data-table">
          <thead>
            <tr>
                <th>#</th>
                <th>Project ID</th>
                <th>credits</th>
                <th>project_architects</th>
                <th>cost_consultant</th>
                <th>date</th>
                <th>collaborating_architects</th>
                <th>project_manager</th>
                <th>client</th>
                <th>executing_architect</th>
                <th>acoustics</th>
                <th>area</th>
                <th>structural_engineer</th>
                <th>main_contraactor</th>
                <th>smith_jones_architecture</th>
                <th>services_engineer</th>
                <th>awards</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody class="rable table-border-bottom-0">
            @foreach($credits as $key => $value)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $value->project->title }}</td>
              <td>{{ $value->credits }} </td>
              <td>{{ $value->project_architects }} </td>
              <td>{{ $value->cost_consultant }} </td>
              <td>{{ $value->date }} </td>
              <td>{{ $value->collaborating_architects }} </td>
              <td>{{ $value->project_manager }} </td>
              <td>{{ $value->client }} </td>
              <td>{{ $value->executing_architect }} </td>
              <td>{{ $value->acoustics }} </td>
              <td>{{ $value->area }} </td>
              <td>{{ $value->structural_engineer }} </td>
              <td>{{ $value->main_contraactor }} </td>
              <td>{{ $value->smith_jones_architecture }} </td>
              <td>{{ $value->services_engineer }} </td>
              <td>{{ $value->awards }} </td>
           
              
            <td>
              @if($value->status)
              <span class="badge bg-label-primary me-1">Publish</span>
              @else
              <span class="badge bg-label-danger me-1">Not Publish</span>
              @endif
           </td>
            <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item"  href="{{ route('credits.edit', $value->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" onclick="return deleteData({{$value->id}})" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
                <form action="{{ route('credits.destroy',$value->id) }}" method="POST" id="delete-form-{{$value->id}}">
                  @method("DELETE")
                  @csrf
                </form>
              </td>
            </tr>
            @endforeach
  
          </tbody>
        </table>
      </div>
  
    </div>
    <!--/ Basic Bootstrap Table -->
  </div>
  @endsection
  
  @push('js')
  
  @endpush