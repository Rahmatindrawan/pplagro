@extends('layouts.admin')

@section('title')
    <title>Admin - Tambah Artikel</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Artikel</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Tambah Artikel
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('posts.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="title" placeholder="Masukkan Title" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <label>Ulasan</label>
                                    <textarea class="form-control" name="content" placeholder="Masukkan Content" rows="4"></textarea>
                                </div>
        
                                <button type="submit" class="btn btn-success">TAMBAH</button>
                                {{-- <button type="reset" class="btn btn-danger">BATAL</button> --}}
                                <a href="{{ route('posts.index') }}" class="btn btn-danger btn-sm">BATAL</a>
                            </form>
                        </div>
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