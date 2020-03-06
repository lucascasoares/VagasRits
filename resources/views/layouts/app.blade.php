<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

	<title>VagasRits</title>
  
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

@yield('content')

	<!-- Bootstrap core JavaScript-->
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

	<!-- Custom scripts for all pages-->
	<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
