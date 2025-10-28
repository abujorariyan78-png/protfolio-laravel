

@extends('layout.admin_layout')
@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title1</th>
      <th scope="col">title2</th>
      <th scope="col">image</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if (count($about)>0)
    @foreach ($about as $about)
         <tr>
      <th scope="row">{{$about->id}}</th>
      <td>{{$about->title1}}</td>
      <td>{{$about->title2}}</td>
     <div>
      <th>
        <img style="height: 10vh" src="{{url($about->image)}}" alt="">
      </th>
     </div>
      <td>{{Str::limit(strip_tags($about->description),40)}}</td>
      <th>
        <dif class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('about.list.edit',$about->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('about.list.delete',$about->id) }}" method="POST"  >
              @csrf
              @method('delete')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger"  >
            </form>
          </div>
        </dif>
      </th>
    </tr>
    @endforeach
        
    @endif
                </main>
               
@endsection
                