<div class="headerBottomArea">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-9">
				<a href="{{URL::to('')}}" class="logo"><img src="{{ asset('img/p2plogo.png') }}" alt=""></a>
			</div>
			<div class="col-md-9 menuCol col-sm-9 col-xs-12">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only"></span>
						<i class="fa fa-navicon"></i>
					</button>
				</div>
				<nav id="navbar" class="collapse navbar-collapse">
					<ul id="nav">
						@foreach ($menu as $key => $value)
						@if($value->parent_id == 0)
						@php
							$submenu = App\Menu::where('parent_id', $value->id)->get();
							if(count($submenu)){
								$dropdown_toggle = "sub-menu";
							}else{
								$dropdown_toggle = "";
							}
						@endphp
						<li class="{{ (!Request::is(@$value->slug)) ? : 'current-menu-item' }}" id="link">
							<a class="" href="{{ URL::to($value->slug) }}">
								{{ $value->menu_name }}
							</a>
							<ul class="{{ @$dropdown_toggle }}">
								@foreach($submenu as $menusub)
								    <li>
								    	<a href="{{ URL::to($value->slug.'/'.$menusub->slug) }}">{{ $menusub->menu_name }}</a>
								    </li>
								@endforeach
							</ul>
						</li>
						@endif
						@endforeach
						<li class="" id="link">
							<a class="" href="{{ URL::to('ckeditor') }}">
								Ckeditor
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
</header>