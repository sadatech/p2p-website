@section('additional-css')
	<style type="text/css">
        .parals {
            min-height: 600px;
            background: transparent;
        }      
    </style>
@endsection
<div class="row">
	<div class="col-md-6">
		<div class="paral" data-parallax="scroll" data-image-src="{{ asset("img/banner.png") }}"></div>
	</div>
	<div class="col-md-6">
		<div class="homeContent">
			<span class="h2 homeTitle">Kini, semua orang bisa tumbuh.</span>
			<p>Lender menginginkan return menarik. Borrower menginginkan bunga bersahabat. Kami merevolusi cara pinjam meminjam, membuatnya lebih menguntungkan bagi kedua pihak.</p>
			<div class="homeBtn">
				<div class="col-md-6 col-sm-6" style="background: #6869AD;">
    				<div class="singlePost">
    					<div class="postContent" style="background: #6869AD;color:white;">
    						<a href="#" class="postTitle h4" style="background: #6869AD;color:white;">Dapatkan return hingga</a>
    						<div class="postDate">20%</div>
    						<a href="#" class="postTitle h4" style="background: #6869AD;color:white;">p.a. <br>dari pokok pinjaman</a>
    						<div class="postExcerpt">
    							<p>Asumsi pendanaan selama 1 tahun pada pinjaman grade C3, sebelum pajak.</p>
    						</div>
    						<div class="homeBtn">
								<a href="#" class="btnOne Btn" style="border: solid 3px #FFF;color: #FFF;"><i class="icofont icofont-rocket-alt-2"></i>Berikan Pinjaman</a>
							</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-6">
    				<div class="singlePost">
    					<div class="postContent">
    						<a href="#" class="postTitle h4">Pinjam dengan bunga</a>
    						<div class="postDate">0,9%</div>
    						<a href="#" class="postTitle h4">per bulan <br>atas nilai pinjaman</a>
    						<div class="postExcerpt">
    							<p>Perhitungan pinjaman berdasarkan analisis credit-scoring.</p>
    						</div>
    						<div class="homeBtn">
								<a href="#" class="btnOne Btn" style="border: solid 3px #FFF;color: #FFF;"><i class="icofont icofont-rocket-alt-2"></i>Ajukan Pinjaman</a>
							</div>
    					</div>
    				</div>
    			</div>
			</div>
		</div>
	</div>
</div>
<section class="page-header">
<div class="container">
	<div class="row">
		<div class="col-md-3">
			Dapatkan komisi <h1>0.5%</h1>
		</div>
		<div class="col-md-6">
			untuk setiap pemberian pinjaman dan pinjaman anggota yang Anda refer. Pelajari lebih lanjut.
		</div>
		<div class="col-md-3">
			<a href="#" class="btnOne Btn" style="border: solid 3px #FFF;color: #FFF;"><i class="icofont icofont-rocket-alt-2"></i>Daftar Sebagai Referral</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div>
</section>
@section('additional-script')
<script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
@endsection