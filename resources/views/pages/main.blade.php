@extends('layout.admin_layout')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Main</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>
                        <form action="{{ route('main.page.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                        <div class="row">
                            <div class="form-group col-md-3 mt-5">
                                <h3>Background image</h3>
                                <img id="prevImage" style="height: 30vh" src="{{ url($main->bg_img) }}" alt="" class="img-thumbnail">
                                <input oninput="prevImage.src=window.URL.createObjectURL(this.files[0])" type="file" id="bg_img" name="bg_img" class="mt-2">
                            </div>
                            <div class="form-group col-md-4 mt-5">
                                <div  class="mt-2">
                                    <label for="title"><h4>Title</h4></label>
                                    <input type="text" name="title" id="title" class="form-control"  value="{{ $main->title }}">
                                </div>
                                 <div class="mt-5">
                                    <label for="sub_title"><h4>Sub Title</h4></label>
                                    <input type="text" name="sub_title" id="sub_title" class="form-control" value="{{ $main->sub_title }}">
                                </div>
                                 <div class="mt-5">
                                    <h4>Upload Resume</h4>
                                    <input type="file" name="resume" id="resume" class="mt-2" >
                                </div>

                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary mt-5">

                        </form>
                </main>
@endsection
                
               