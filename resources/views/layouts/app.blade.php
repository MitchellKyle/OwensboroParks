<!DOCTYPE html>
<html>
<head>

	<title>@yield('title')Owensboro Parks &amp; Recreation</title>
	<!-- Page Icon -->
	<link rel="icon" type="image/png" sizes="32x32" href="/img/parks_and_rec_symbol.png">

	<!-- Screen Displays -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	
	<!-- Goggle Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,700|Josefin+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
<div class="header">
	
		<nav class="navbar navbar-default" role="navigation" id="affix1">
		
			<!-- Brand and toggle get grouped for better mobile display -->
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="/img/parks_and_rec_symbol.png" alt="brand"></a>
				<a class="navbar-brand" id="navbar-brand" href="/">Owensboro Parks &amp; Recreation</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/parks">Parks</a></li>
					<li><a href="/amenities">Amenities</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	<h1 class="text-center" id="mobile-header">Owensboro Parks &amp; Recreation</h1>
</div>


	<!-- Search Navbar -->

	<nav class="navbar navbar-inverse">
		<div class="navbar-nav navbar-right" id="affix2">
			<form method="GET" action="search" class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input name="q" type="search" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-custom">Submit</button>
			</form>
		</div>
	</nav>

	

	<div class="container-fluid">
		@yield('content')
	</div>

	<footer>
		
	</footer>

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

  @yield('scripts')
</body>
</html>