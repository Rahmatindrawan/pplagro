@extends('layouts.petani')

@section('title')
    <title>Artikel</title>
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
                    <a href="{{ route('posts.create') }}" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH ARTIKEL</a>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                            <th>Judul</th>
                            <th>Konten</th>
                            </tr>
                        </thead>
                        <tbody>

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