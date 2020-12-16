@extends('layouts.petani')

@section('title')
    <title>Petani - Artikel</title>
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
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                            <th>Judul</th>
                            <th>Konten</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($posts as $post)
                            <tr>
                                <td>{!! $post->title !!}</td>
                                <td>{!! $post->content !!}</td>
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