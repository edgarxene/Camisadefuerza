<!DOCTYPE html>
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/united/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/sticky.css') }}">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	</head>

	<body>
	<!-- Wrap all page content here -->
<div id="wrap">
  
  <!-- Fixed navbar -->
  	@include('store.partials.nav')
  
  <!-- Begin page content -->
  <div class="center-container">
    
    <div class="center-row">
    
      <div class="container">

	@yield('content')
        
    
        
                

      
      </div>
    
    </div>
    
    
  </div>
  
</div>

    	@include('store.partials.footer')


	</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</html>