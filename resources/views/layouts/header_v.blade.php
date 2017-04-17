<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>{{ (@$search_menu_id->slug == '') ? ' CashMoney - Pinjam Cepat , Akurat , Dan Tepat ' : @$search_menu_id->seo_title.' CashMoney' }} </title>	
        {!! html_entity_decode(@$search_menu_id->meta) !!}
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">


		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive/responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('css/pace.css') }}">
        @yield('additional-css')
        <style type="text/css">
            .paral {
                min-height: 700px;
                background: transparent;
            }
            .affix {
                top: 0;
                width: 100%;
            }
        </style>
		<script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
	</head>
	<body class="home v2">
		<div class="body">
		<header>
    	<div class="headerTopArea">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-5 col-sm-3 col-xs-5">
                        <div class="langOpt">
                            <span class="langTxt">Language: &nbsp;</span>
                            <span class="langIcon"><span class="langCode">en</span><i class="icofont icofont-caret-down"></i> </span>
                            <ul class="lang">
                            <li data-code="en">english</li>
                            <li data-code="bn">bengali</li>
                            <li data-code="ar">aribic</li>
                            <li data-code="da">dansk</li>
                            </ul>
    					</div>
    				</div>
    				<div class="col-md-7 col-sm-9 col-xs-7">
    					<ul class="topInfo">
    						<li class="call"><a href="tel:+214-5212-829"><i class="icofont icofont-ui-call"></i>+214-5212-829</a></li>
    						<li class="email"><a href="mailto:support@spark.com"><i class="icofont icofont-ui-v-card"></i>support@spark.com</a></li>
							<li class="clientAreaLi"><span><i class="icofont icofont-user-alt-3"></i>Client area</span></li>
    					</ul>
    					<div class="clientLogin">
    						<form action="login.php" method="post">
    							<div class="closeBtn"><i class="icofont icofont-close"></i></div>
    							<div class="h5">sign in</div>
    							<div class="userName"><input name="userName" placeholder="Username" type="text"></div>
    							<div class="password"><input name="password" placeholder="Password" type="password"></div>
    							<input type="submit" value="sign in">
    							<div class="h5">Forgot Passsword? <a href="#">Click here</a></div>
    							<div class="logBtm">
    								<div class="h5">Don’t have an account yet?</div>
    								<a href="{{ URL::to('register') }}" class="signUp">Click here to sign up.</a>
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>