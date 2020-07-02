<!DOCTYPE html>
<html>
<head>
	<title>Chicken</title>
</head>
<body>
<h1>{{ $chicken->name }}</h1>
<p>You see {{$chicken->appearance}}</p>
<p>Owner (#{{$chicken->owner_id}}): {{$owner}}</p>
</body>
</html>