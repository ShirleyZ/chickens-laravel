<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>
<body>
<h1>Users profile</h1>

<div>
	<p>#{{ $user->id }}</p>
	<p>Name: {{ $user->name }}</p>
	<p>Chickens Owned: Not enough</p>
</div>
<div>
	@foreach ($chickens as $chicken)
    <div>
    	<p>Name: 
    		<a href="/chicken/{{$chicken->id}}">{{ $chicken->name }}</a>
    	</p>
    	<p>Age: {{ $chicken->age }}</p>
    	<p>Appearance: {{ $chicken->appearance }}</p>
    </div>
	@endforeach
</div>
<br>
<pre>
	{{ $user }}
</pre>
<pre>
	{{ $chickens }}
</pre>
</body>
</html>