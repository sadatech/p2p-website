@include('layouts.header_v')
@include('layouts.sidebar_v')

<div role="main" class="main">
	@if(@$content == null)
		@if(!Request::is('ckeditor'))
			@include('layouts.slide_v')
		@endif
	@else
	@endif
		@yield('content')
</div>
@include('layouts.footer_v')