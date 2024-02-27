@extends('admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">{{$title}}
      <a class="btn btn-primary" href="{{ route('news.create') }}" style="float: right;">  Add <i class="bx bx-plus me-1"></i></a>
    </h5>
    
    <div class="table-responsive text-nowrap">
        <table class="table" id="data-table">
          <thead>
            <tr>
                <th>#</th>
                <th>Project</th>
                <th>Category</th>
                <th>Title</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody class="rable table-border-bottom-0">
            @foreach($news as $key => $value)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $value->project->title }}</td>
              <td>{{ $value->category }} </td>
              <td>{{ $value->title }} </td>
           
              
             <td>
                @if($value->image)
                <img src="{{ url('storage/uploads/news/'.$value->image) }}" width="60" />
                @else
                ---
                @endif
            </td>
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
                    <a class="dropdown-item"  href="{{ route('news.edit', $value->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" onclick="return deleteData({{$value->id}})" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
                <form action="{{ route('news.destroy',$value->id) }}" method="POST" id="delete-form-{{$value->id}}">
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