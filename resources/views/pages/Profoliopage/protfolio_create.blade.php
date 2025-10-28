@extends('layout.admin_layout')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Main</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>
                        <form action="{{ route('protfolio.stor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Big Image</h3>
                    <img style="height: 30vh" src="{{ asset('assets/img/big_image.jpg.jpg') }}" class="img-thumbnail" id="bigimage" >
                        <input  class="mt-3" type="file" name="big_image" oninput="bigimage.src=window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Small Image</h3>
                        <img style="height: 20vh" src="{{asset('assets/img/small_image.jpg.jpg')}}" class="img-thumbnail" id="prevImage">
                        <input oninput="prevImage.src=window.URL.createObjectURL(this.files[0])" class="mt-3" type="file" name="small_image" >
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                        </div>
                        <div class="mb-5">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="client"><h4>Client</h4></label>
                        <input type="text" class="form-control" id="client" name="client" value="">
                        </div>
                        <div class="mb-5">
                            <label for="category"><h4>Category</h4></label>
                            <input type="text" class="form-control" id="category" name="category" value="">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary my-5">
            </div>
            </form>
                </main>
@endsection
                
               