@extends('layouts.app_v')
@section('content')
<section class="page-header">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ URL::to('') }}">Home</a></li>
				@if(Request::segment(1) != null)<li class=@if(Request::segment(2) == null) "active" @endif>@if(Request::segment(2) != null) <a href="{{ URL::to(Request::segment(1)) }}"> @endif{!! ucwords(str_replace('-', ' ', Request::segment(1))) !!}</a></li> @endif
				@if(Request::segment(2) != null)<li class=@if(Request::segment(3) == null) "active" @endif>@if(Request::segment(4) != null) <a href="{{ URL::to(Request::segment(1).''.Request::segment(2)) }}"> @endif{!! ucwords(str_replace('-', ' ', Request::segment(2))) !!}</a></li> @endif
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h1 style="color: #FFF;">{{ @$search_menu_id->description }}</h1>
		</div>
	</div>
</div>
</section>
<div class="container">
	<div class="row">
	@foreach(@$content as $content_v)
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mb-none">{{ @$content_v->title }}</h2>
					<hr class="tall">

				</div>
			</div>
					{!! html_entity_decode(@$content_v->description) !!}
		</div>
	@endforeach
	</div>
</div>
@endsection