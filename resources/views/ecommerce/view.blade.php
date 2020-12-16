@extends('layouts.ecommerce')

@section('title')
    <title>VegeBox</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Artikel</h2>
                    <div class="page_link">
                        <a href="{{ route('front.index') }}">Home</a>
                        <a href="{{ route('front.product') }}">Artikel</a>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!--================End Home Banner Area =================-->
    <main class="main">
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
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
    <!--================Category Product Area =================-->

    <!--================End Category Product Area =================-->
@endsection