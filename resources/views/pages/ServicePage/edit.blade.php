@extends('layout.admin_layout')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Of List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                        <form action="{{ route('service.list.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            
                        <div class="row">
                            
                            <div class="form-group col-md-4 mt-5">
                                <div  class="mt-2">
                                    <label for="icon"><h4>Font Awsome Icon</h4></label>
                                    <input type="text" name="icon" id="icon" class="form-control" value="{{ $service->icon }}">
                                </div>
                                 <div  class="mt-2">
                                    <label for="title"><h4>Title</h4></label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}">
                                </div>
                                 <div  class="mt-2">
                                    <label for="description"><h4>Description</h4></label>
                                     <textarea type="text" name="description" id="description" class="form-control">{{ $service->description }}</textarea>
                                </div>

                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary mt-5">

                        </form>
                </main>
@endsection
                
               