@extends('layouts.admin')

@section('title')
    <title>Admin - Artikel</title>
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
                        Artikel
                    </h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Artikel</a>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                            <th>Judul</th>
                            <th>Ulasan</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
        
        
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{!! $post->content !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
        
        
                        </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection