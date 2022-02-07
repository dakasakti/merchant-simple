@extends('admin.main')

@section('Judul', 'HALAMAN DARTIKEL')

@section('content')
    <div class="pagetitle">
        <h1>Halaman untuk data artikel</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Articles Data</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <div class="container">
        <section>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <section class="panel">
                        <header class="panel-heading">
                            <a class="btn btn-primary" href="{{ route('article.create') }}" role="button">Tambah Data</a>
                        </header>
                    </section>
                </div>
            </div>
            <!-- page start -->
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>SUCCESS</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            
            <div class="row mb-3">
                <div class="col-12">
                    <h5 class="mb-3">AIMERCH LIST</h5>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col ">Title</th>
                                <th scope="col ">Category</th>
                                <th scope="col ">Review</th>
                                <th scope="col ">Action</th>
                            </tr>

                            @foreach ($articles as $data)
                            <tr>
                                <td scope="col ">{{ $data->title }}</td>
                                <td scope="col ">{{ $data->category }}</td>
                                <td scope="col ">{{ $data->review }}</td>
                                <td scope="col ">
                                    <a class="btn btn-outline-success btn-sm" href="{{ route('article.show', $data->id) }}" role="button">Detail</a>
                                    <a class="btn btn-outline-warning btn-sm" href="{{ route('article.edit', $data->id) }}" role="button">Edit</a>
                                    <form class="d-inline" action="{{ route('article.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr> 
                            @endforeach
                            
                        </thead>
                    </table>
                </div>
            </div>
            <!-- page end -->
        </section>
    </div>
@endsection