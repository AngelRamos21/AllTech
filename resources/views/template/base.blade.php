
<!DOCTYPE html>

<html lang="es" dir="ltr">

	<head>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title')</title>
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	    	@yield('css')
	</head>

	<body>

			@yield('content')
			<script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
			<script src="https://unpkg.com/ionicons@4.4.7/dist/ionicons.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
		  <script src={{ asset('/js/app.js') }}></script>
		  <script src={{ asset('/js/jss.js') }}></script>

	</body>

</html>
