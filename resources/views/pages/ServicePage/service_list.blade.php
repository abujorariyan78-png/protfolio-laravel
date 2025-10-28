@extends('layout.admin_layout')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List Of Service</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>


                        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">icon</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if (count($service)>0)
    @foreach ($service as $service)
         <tr>
      <th scope="row">{{$service->id}}</th>
      <td>{{$service->icon}}</td>
      <td>{{$service->title}}</td>
      <td>{{Str::limit(strip_tags($service->description),40)}}</td>
      <th>
        <dif class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('service.list.edit',$service->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('service.list.delete',$service->id) }}" method="POST">
              @csrf
              @method('delete')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            </form>
          </div>
        </dif>
      </th>
    </tr>
    @endforeach
        
    @endif
   
    
      
  </tbody>
</table>
                        
                </main>
@endsection
                
               