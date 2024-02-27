@extends('admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">{{$title}}
      <a class="btn btn-primary" href="{{ route('websites.create') }}" style="float: right;">  Add <i class="bx bx-plus me-1"></i></a>
    </h5>
    
    <div class="table-responsive text-nowrap">
      <table class="table" id="data-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>URL</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Logo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="rable table-border-bottom-0">
          @foreach($websites as $key => $value)
          <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->url }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->address }}</td>
            <td>
              @if($value->image)
              <img src="{{ url('storage/uploads/websites/'.$value->logo) }}" width="60" />
              @else
              ---
              @endif
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item"  href="{{ route('websites.edit', $value->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" onclick="return deleteData({{$value->id}})" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
              <form action="{{ route('websites.destroy',$value->id) }}" method="POST" id="delete-form-{{$value->id}}">
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
