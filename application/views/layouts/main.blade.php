<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>e-Valimised</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ asset("css/normalize.min.css") }}">
		<link rel="stylesheet" href="{{ asset("css/main.css") }}">

		<script src="{{ asset("js/vendor/modernizr-2.6.2-respond-1.1.0.min.js") }}"></script>
	</head>
	<body{{ isset($javascript[0]) ? " data-controller=\"{$javascript[0]}\"" : null }}{{ isset($javascript[1]) ? " data-action=\"{$javascript[1]}\"" : null }} data-url="{{ URL::base() }}" data-live="{{ Config::get("live.client.full_url") }}"{{ Config::get("application.profiler") ? ' data-debug="true"' : '' }}>
		<!--[if lt IE 7]>
			<p class="chromeframe">Te kasutate <strong>vananenud</strong> veebibrauserit. Palun <a href="http://browsehappy.com/">uuendage oma brauserit</a> või <a href="http://www.google.com/chromeframe/?redirect=true">installeerige Google Chrome Frame</a> et parandada oma valimiskogemust.</p>
		<![endif]-->
		<div class="header-container">
			<div class="disclaimer">Antud rakendus ei ole mõeldud kasutamiseks reaalsetel valimistel</div>
			<header class="wrapper clearfix">
				<h1 class="title"><a href="{{ url("/") }}">e-Valimised</a></h1>
				<div class="user">
					@if(Auth::check())
						Tere {{ Auth::user()->eesnimi }} {{ Auth::user()->perekonnanimi }}! &ndash; <a href="{{ url("logout") }}">logi välja &rsaquo;</a>
					@else
						Pole sisse loginud &ndash; <a href="{{ url("login") }}"><img src="{{ asset("img/fb_login.png") }}" class="fb-login" alt="fb-login"></a>
					@endif
				</div>
				<nav class="clearfix">
					<ul>
						<li data-item="kandidaadid"{{ $menu_item == "kandidaadid" ? ' class="active"' : null }}><a href="{{ url("kandidaadid") }}">Kandidaadid</a></li>
						<li data-item="tulemused"{{ $menu_item == "tulemused" ? ' class="active"' : null }}><a href="{{ url("tulemused") }}">Tulemused</a></li>
						<li data-item="haaleta"{{ $menu_item == "haaleta" ? ' class="active"' : null }}><a href="{{ url("haaleta") }}">Hääleta</a></li>
					</ul>
				</nav>
			</header>
		</div>
		<div class="main-container">
			<div id="content" class="main wrapper clearfix">
				@if(Session::has("message"))
					<div class="alert">{{ Session::get("message") }}</div>
				@endif
				{{ $content }}
			</div> <!-- #main -->
		</div> <!-- #main-container -->
		<div class="footer-container">
			<footer class="wrapper">
				<h3>&#169; <a href="https://github.com/t2t2/k16" target="_blank">K16</a></h3>
				<div class="disclaimer">Rakenduses realiseeritud e-valimiste näide on realiseeritud <a href="https://courses.cs.ut.ee/2013/vl/spring/Main/Practices" target="_blank">tehnoloogiate praktiseerimise eesmärgil</a> ning ei ole mõeldud reaalsete e-valimiste korraldamiseks. Kokkulangevused reaalse e-valimiste protsessiga on juhuslikud. Kui valimismaania kestab rohkem kui 2 nädalat palun konsulteerige arsti või apteekriga.</div>
			</footer>
		</div>
		<div id="ajax-loader" class="ajax-loader">
			<img src="{{ asset("img/ajax-loader.gif") }}" alt="Laen..."/>
			Oota natukene, meil on asju leida...
		</div>

		<script src="{{ asset("js/vendor/jquery-1.9.1.min.js") }}"></script>
		<script src="{{ asset("js/jquery.autocomplete.js") }}"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAY_6ETr1c7dQHucQJatGqBehz6LG0oCLc&amp;sensor=false"></script>
		<script type="text/javascript" src="{{ asset("js/vendor/StyledMarker.js") }}"></script>
		<script src="{{ asset("js/main.js") }}"></script>
		<iframe class="hidden" height="0" width="0" src="{{ asset("offline.html") }}"></iframe>
	</body>
</html>