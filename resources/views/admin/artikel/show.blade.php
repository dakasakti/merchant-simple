@extends('admin.main')
@section('content')
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12">
                <h5 class="mb-4">Show Artikel</h5>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $article->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $article->category }}</h6>
                      <p class="card-text">{{ $article->review }}</p>
                      <a href="{{ route('article.index') }}" class="card-link">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection