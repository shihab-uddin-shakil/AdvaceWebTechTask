<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	
	<form method="post">
		{{--  <input type="hidden" name="_token" value="{{csrf_token()}}">  --}}
        @csrf
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" ></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input type="submit" name="Submit" value="submit">
			<a href="/register"> Signup</a>
			</td>
		</tr>
	</table>
	</form>
	
	<br>
	{{session('msg')}}
	<br>
	@foreach ($errors->all() as $error)
		{{$error}} <br>
	@endforeach
</body>
</html>
