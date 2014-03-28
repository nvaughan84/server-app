<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Blue Cube | Websites</title>
	{{ HTML::style('css/styles.css'); }}
</head>
<body>
	<header>
		{{ link_to('sites', 'Sites', $attributes = array(), $secure = null) }} | {{ link_to('servers', 'Servers', $attributes = array(), $secure = null) }}
	</header>
	<h2>@yield('header')</h2>
	<div>
		@yield('content')
	</div>
</body>
</html>
