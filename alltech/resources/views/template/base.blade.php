
<!DOCTYPE html>

<html lang="es" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
	    	@yield('css')
	</head>

	<body>

			@yield('content')
		  <script src={{ asset('/js/app.js') }}></script>
		  <script src={{ asset('/js/js.js') }}></script>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
     <script src="js/jquery.js"> </script>
     <script src="js/bootstrap.min.js"></script>
		 <script src="https://unpkg.com/ionicons@4.4.7/dist/ionicons.js"></script>
	</body>

</html>
