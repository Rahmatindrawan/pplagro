@extends('layouts.ecommerce')

@section('title')
    <title>VegeBox</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>VegeBox
						<p>Jual Beli Hasil Tani</p>
						<a class="white_bg_btn" href="#">More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Produk Terbaru</h2>
					</div>
				</div>
				<div class="row">
          
          @forelse($products as $row)
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
                <img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
								<div class="p_icon">
									<a href="{{ url('/product/' . $row->slug) }}">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
              <a href="{{ url('/product/' . $row->slug) }}">
                 <h4>{{ $row->name }}</h4>
							</a>
              <h5>Rp {{ number_format($row->price) }}</h5>
						</div>
					</div>
          @empty
                    
          @endforelse
				</div>

				<div class="row">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->
@endsection