@extends('admin.main')
@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Bikin Artikel</h5>

            <form action="{{ route('article.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Nama Merch</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Nama Merch" required autofocus>
                    <small id="title" class="form-text text-muted">Nama merch nya minimal 3 karakter.</small>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori Merch</label>
                    <input type="text" name="category" class="form-control" id="category" placeholder="Kategori Merch" required>
                    <small id="category" class="form-text text-muted">Wajib memasukkan nama kategori nya.</small>
                </div>
                  
                <div class="mb-3">
                    <label for="review" class="form-label">Isi Reviewnya</label>
                    <textarea name="review" class="form-control" id="review" rows="3"></textarea>
                    <small id="review" class="form-text text-muted">Silahkan memasukkan isi review merch tersebut.</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>    
@endsection