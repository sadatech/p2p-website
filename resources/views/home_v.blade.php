@extends('layouts.app_v')

@section('content')
<br></br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>Apa itu CashMoney?</h1> <hr>
			CashMoney adalah perusahaan Fintech Lending Indonesia yang melayani investasi online P2P Lending dengan machine learning yang inovatif, menghubungkan Investor dengan Peminjam dalam sebuah platform teknologi mutakhir. Investor dapat berinvestasi mulai dari Rp 100.000 dan Peminjam dapat mengajukan pinjaman dengan bunga rendah. Pelajari Lebih Lanjut
			<div class="homeBtn">
				<a href="#" class="btnOne Btn" style="border: solid 3px #FFF;color: #FFF;"><i class="icofont icofont-rocket-alt-2"></i>Mulai Berinvestasi</a>
				<a href="#" class="btnOne Btn" style="border: solid 3px #6869AD;background:#FFF;color: #6869AD;"><i class="icofont icofont-rocket-alt-2"></i>Ajukan Pinjaman</a>
			</div>
		</div>
		<div class="col-md-6">
			<iframe allowfullscreen="" frameborder="0" height="300" src="https://www.youtube.com/embed/nRygLqd7P3Y?modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;controls=1" width="550"></iframe>
		</div>
	</div>
</div>
<div class="clientArea" style="opacity: 1;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle">
                        <div class="h2">We give <span>awesome service,</span><br>Some of our trusted clients.</div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-4 col-sm-6">
    				<div class="singlePost">
    					<div class="postContent" style="border:solid 0px #000;background: transparent;">
	    					<div><img src="{{ asset('img/icon/p2p01.svg') }}" width="300" height="100"></div>
    						<a href="#" class="postTitle h4">Easy Entry</a>
    						<div class="postExcerpt">
    							<p>Dengan proses aplikasi yang simpel—100% online—Anda dapat mulai mendanai dari Rp 5.000.000 untuk Business Loan dan Rp 1.000.000 untuk Employee Loan.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6">
    				<div class="singlePost">
    					<div class="postContent" style="border:solid 0px #000;background: transparent;">
	    					<div style="padding: 30px;"><img src="{{ asset('img/icon/p2p02.svg') }}"></div>
    						<a href="#" class="postTitle h4">Return yang Atraktif</a>
    						<div class="postExcerpt">
    							<p>Lender akan langsung menerima bunga yang dibayarkan oleh Borrower tanpa beban biaya apapun.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-6">
    				<div class="singlePost">
    					<div class="postContent" style="border:solid 0px #000;background: transparent;">
	    					<div style="padding: 30px;"><img src="{{ asset('img/icon/icon-entry.png') }}"></div>
    						<a href="#" class="postTitle h4">Risiko Terukur<br></a>
    						<div class="postExcerpt">
    							<p>Analisis komprehensif terhadap invoice yang diajukan oleh Calon Borrower. Pendanaannya pun dijamin berkualitas.</p>
    						</div>
    					</div>
    				</div>
    			</div>
            </div>
        </div>
    </div>
@endsection