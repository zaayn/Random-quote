<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Random quote">
	<meta name="author" content="Moh. Muzayyin Amrulloh">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/mediaelementplayer.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}"/>
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <!-- end: Css -->
  <link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">

</head>

<body id="mimin" class="dashboard topnav">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <a href="index.html" class="navbar-brand"> 
                 <b>Random Quote</b>
                </a>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <!-- start: Content -->
        <div id="content">
          <div class="col-md-12 top-20 padding-0">
            <div class="col-md-2"></div>
            
            <div class="col-md-8">
                @yield('content')
            </div>

            <div class="col-md-2"></div> 
          </div>
        </div>
      <!-- end: content -->

<!-- start: Javascript -->
<script src="{{('asset/js/jquery.min.js')}}"></script>
<script src="{{('asset/js/jquery.ui.min.js')}}"></script>
<script src="{{('asset/js/bootstrap.min.js')}}"></script>
<script src="{{('asset/js/myjs')}}"></script>


<!-- plugins -->
<script src="{{('asset/js/plugins/holder.min.js')}}"></script>
<script src="{{('asset/js/plugins/moment.min.js')}}"></script>
<script src="{{('asset/js/plugins/jquery.nicescroll.js')}}"></script>


<!-- custom -->
<script src="{{asset('asset/js/main.js')}}"></script>
@yield('myjs')

<!-- end: Javascript -->
</body>
</html>