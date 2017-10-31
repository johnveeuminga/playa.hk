<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">

    @yield('stylesheets')
</head>
<body>
	@yield('content')

	
    <script src="js/app.js"></script>
	@yield('scripts')
</body>
</html>