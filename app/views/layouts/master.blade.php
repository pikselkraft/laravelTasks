<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Laravel Tasks</title>
		<link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">

		<script src="{{ asset('javascripts/vendor/jquery.js') }}"></script>
		<script src="{{ asset('javascripts/foundation/foundation.js') }}"></script>
		<script src="{{ asset('javascripts/vendor/custom.modernizr.js') }}"></script>

		<script src="{{ asset('javascripts/foundation/foundation.dropdown.js') }}"></script>
		<script src="{{ asset('javascripts/foundation/foundation.topbar.js') }}"></script>
	</head>

	<body>

		<nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                  <h1>Laravel Tasks</h1>
                </li>
            </ul>
        </nav>
        <br/>

		<div class="row">
	    	<div class="large-12 columns panel">
				<div class="container">

					@yield('content')
			
				</div>
			</div>
		</div>

		<div class="row panel">
        	<h6>Me suivre sur les r&eacute;seaux</h6>	
	        <ul class="breadcrumbs">
	          <li><a href="https://github.com/wtod/kolb-dev" target="_blank"><i class="fa fa-github fa-2x"></i>Github</a>
	          <li><a href="https://twitter.com/WtoD_fr" target="_blank"><i class="fa fa-twitter fa-2x"></i>Twitter</a></li>
	          <li><a href="https://plus.google.com/+derekSALMON/posts" target="_blank"><i class="fa fa-google-plus fa-2x"></i>Google+</a></li>
	          <li><a href="http://fr.linkedin.com/in/dereksalmon/" target="_blank"><i class="fa fa-linkedin fa-2x"></i>Linkedin</a></li>
	        </ul>
    	</div>

	</body>

</html>