<html>
<head>
	<meta charset="UTF-8">
	<title>ToDo - @yield('title', 'ToDo Application')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link 
	rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<header>
			<div class="container">
				<ul class='nav'>
					<li class='nav-item'><a class='nav-link' href="/">Home</a></li>
					<li class='nav-item'><a class='nav-link' href="/about">About</a></li>
					<li class='nav-item'><a class='nav-link' href="/contact">Contact</a></li>
					<li class="nav-item">
						<a href="{{ route('tasks.index') }}" class="nav-link">Tasks</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('tasks.new') }}" class="nav-link">New Tasks</a>
					</li>
				</ul>
			</div>
		</header>


		<main class="contents">
			<div class="container">
				@yield('contents')
			</div>
		</main>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>