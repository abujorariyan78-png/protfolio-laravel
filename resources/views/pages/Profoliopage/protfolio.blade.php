
@extends('layout.admin_layout')
@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Protfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Protfolio</a></li>
                            <li  class="breadcrumb-item active"><a href="{{ route('service.list')}}">List</a></li>
                        </ol>
                       
                </main>
               
@endsection
                