<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Laravel</title>
	</head>

	<body>
		<h1>All Tasks</h1>

		@foreach($tasks as $task)
			<li>{{ $task->title}}</li>
		@endforeach

	</body>

</html>