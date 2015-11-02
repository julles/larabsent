<!DOCTYPE html>
<html>
<head>
	<title>{{ \Larabsent::config(['appName']) }}</title>
	
	<link rel="stylesheet"  href = '/css/app.css'>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="{{ \Larabsent::assetUrl(null) }}js/sweetalert/dist/sweetalert.css">
 
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   <script src="{{ \Larabsent::assetUrl(null) }}js/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{ \Larabsent::config(['appName']) }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
          	
          	<li ><a href="{{ url('position') }}">Data Jabatan / Position</a></li>
            
            <li ><a href="{{ url('pegawai') }}">Data Pegawai</a></li>
          
          </ul>
        
        </div><!--/.nav-collapse -->
      
      </div>
    
    </nav>

	<div class="container">
		@yield('content')
	</div>

         <!-- jQuery -->
        

</body>

</html>