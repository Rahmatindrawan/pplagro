@extends('layouts.admin')

@section('title')
    <title>Admin - Edit Artikel</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Edit Artikel</li>
    </ol>
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Edit Artikel
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="title" placeholder="Masukkan Title" value="{{ $post->title }}" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label>Ulasan</label>
                                <textarea class="form-control" name="content" placeholder="Masukkan Content" rows="4">{{ $post->content }}</textarea>
                            </div>
    
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            {{-- <button type="reset" class="btn btn-warning">BATAL</button> --}}
                            <a href="{{ route('posts.index') }}" class="btn btn-danger btn-sm">BATAL</a>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</main>
@endsection