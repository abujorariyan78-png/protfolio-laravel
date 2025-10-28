
@extends('layout.admin_layout')
@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Create</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">create</li>
                        </ol>
                             <form action="{{ route('about.stor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Image</h3>
                    <img style="height: 30vh" src="{{ asset('assets/img/big_image.jpg.jpg') }}" class="img-thumbnail" id="prevImage" >
                        <input  class="mt-3" type="file" name="image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])">
                    </div>
                   
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title1"><h4>Title</h4></label>
                        <input type="text" class="form-control" id="title1" name="title1" value="">
                        </div>
                        <div class="mb-5">
                            <label for="title2"><h4> Title 2</h4></label>
                            <input type="text" class="form-control" id="title2" name="title2" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="5"></textarea>
                    </div>
                   
                </div>
                <input type="submit" name="submit" class="btn btn-primary my-5">
            </div>
            </form>
                </main>
               
@endsection
                