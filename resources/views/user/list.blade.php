<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
<h1>Users List</h1>

<table>
	<tbody>
		@foreach ($users as $user)
	    <tr>
	    	<td>Name: {{ $user->name }}</td>
	    	<td>Profile: {{ $user->profile }}</td>
	    </tr>
		@endforeach
	</tbody>
</table>
<br>
<pre>
	{{ $users }}
</pre>
</body>
</html>