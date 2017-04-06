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
			<h1 style="color:white;">Ckeditor</h1>
		</div>
	</div>
</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<form id="ajax-contact" action="{{ URL('ckeditor/addContent') }}" method="post" class="contactForm">
						{{ csrf_field() }}
						<div class="contactInput">
							<input id="title" name="title" type="text" placeholder="title*">
						</div>
						<div class="contactSelect">
							<select name="menu_id" id="menu">
								@foreach(@$menu_all as $all_menu)
									<option value="{{ @$all_menu->id }}"> {{ @$all_menu->menu_name }} </option>
								@endforeach
							</select>
						</div>
						<div class="contactMsg" style="height:350px;">
							<textarea id="editor" name="description" style="height:350px;"></textarea>
						</div>
						<div class="contactSubmit">
							<button>Save Data</button>
						</div>
						<div id="form-messages"></div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection
@section('additional-script')
<script type="text/javascript">
	CKEDITOR.replace( 'editor' );
</script>
@endsection