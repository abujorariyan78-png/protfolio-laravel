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
      <th scope="col">title</th>
      <th scope="col">sub_title</th>
      <th scope="col">big_image</th>
      <th scope="col">small_image</th>
      <th scope="col">description</th>
      <th scope="col">client</th>
      <th scope="col">category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if (count($protfolio)>0)
    @foreach ($protfolio as $protfolio)
         <tr>
      <th scope="row">{{$protfolio->id}}</th>
      <td>{{$protfolio->title}}</td>
      <td>{{$protfolio->sub_title}}</td>
     <div>
      <th>
        <img style="height: 10vh" src="{{url($protfolio->big_image)}}" alt="">
      </th>
     </div>
     <div>
      <th>
        <img style="height:10vh" src=" {{url ($protfolio->small_image)}}" alt="">
      </th>
     </div>
      <td>{{Str::limit(strip_tags($protfolio->description),40)}}</td>
      <td>{{$protfolio->client}}</td>
      <td>{{$protfolio->category}}</td>
      
      <th>
        <dif class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('protfolio.list.edit',$protfolio->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('protfolio.list.delete',$protfolio->id) }}" method="POST"  >
              @csrf
              @method('delete')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger" >
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
                
               