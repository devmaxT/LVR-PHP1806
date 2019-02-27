<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo view Laravel</title>
	<link rel="stylesheet" href="{{ asset('css/demo/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<style type="text/css" media="screen">
		body{
			font-family: 'Indie Flower', cursive;
		}
	</style>
</head>
<body>
	<div class="container">
		@include('common.header')
		@include('common.menu')
		@yield('content')
		@include('common.footer')
	</div>
</body>
</html>