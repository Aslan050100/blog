<!DOCTYPE html>
<html>
<head>
	<title>Data Page</title>
</head>
<body>
	<div>
		@foreach($professions as $profession)
		<div>
			<a href="">{{$profession}}</a>
		</div>
		@endforeach
	</div>
	
</body>
</html>