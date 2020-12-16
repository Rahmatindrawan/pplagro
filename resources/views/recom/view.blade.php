@extends('layouts.petani')

@section('title')
    <title>Petani - Rekomendasi</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Rekomendasi</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Rekomendasi
                    </h4>
                </div>
                <div class="card-body">
                    <label for="soal1">1. Bagaimana tekstur tanah anda ?</label>
                    <select name="soal1" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">Lempung Berdebu</option>
                        <option value="">Lempung Berpasir</option>
                        <option value="" >Gempur Berpasir</option>
                    </select><br>
                    <label for="soal2">2. Bagaimana jenis tanah anda?</label>
                    <select name="soal2" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">Tanah Gambut</option>
                        <option value="">Tanah Aluvial</option>
                        <option value="">Tanah Humus</option>
                        <option value="">Tanah Latosol</option>
                    </select><br>
                    <label for="soal3">3. Bagaimana kedalaman tanah (solum) anda?</label>
                    <select name="soal3" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">> 90 cm</option>
                        <option value="">< 90 cm</option>
                    </select><br>
                    <label for="soal4">4. Bagaimana pH tanah anda?</label>
                    <select name="soal4" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">< 6 ( Asam )</option>
                        <option value="">6 - 7 ( Netral )</option>
                    </select><br>
                    <label for="soal5">5. Bagaimana curah hujan di daerah anda?</label>
                    <select name="soal5" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">1000 - 2000 mm/tahun</option>
                        <option value="">1500 - 2500 mm/tahun</option>
                        <option value="">1500 - 3000 mm/tahun</option>
                    </select><br>
                    <label for="soal6">6. Bagaimana suhu dataran di daerah anda?</label>
                    <select name="soal6" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">21° - 25°C</option>
                        <option value="">25°-35° C</option>
                    </select><br>
                    <label for="soal7">7. Bagaimana ketinggian tempat dataran anda?</label>
                    <select name="soal7" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">0 - 400 MDPL</option>
                        <option value="">800 - 1200 MDPL</option>
                    </select><br>
                    <label for="soal8">8. Apa warna tanah anda?</label>
                    <select name="soal8" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="">Abu-abu</option>
                        <option value="">Cokelat</option>
                        <option value="">Hitam Keabu-abuan</option>
                        <option value="">Kuning</option>
                    </select><br>
                    <div class="form-group">
                        <button class="btn btn-md btn-success" class="float-right">Cek Rekomendasi</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection