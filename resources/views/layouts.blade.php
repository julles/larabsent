<!DOCTYPE html>
<html>
<head>
	<title>{{ \Larabsent::config(['appName']) }}</title>
	
	<link rel="stylesheet"  href = '/css/app.css'>

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
          	
          	<li ><a href="{{ url('jabatan') }}">Data Jabatan</a></li>
            
            <li ><a href="{{ url('pegawai') }}">Data Pegawai</a></li>
          
          </ul>
        
        </div><!--/.nav-collapse -->
      
      </div>
    
    </nav>

	<div class="container">
		@yield('content')
	</div>

</body>

</html>