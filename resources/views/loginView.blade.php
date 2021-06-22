<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
   <form action="" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="submit" value="submit" name="login >
</form>
    <br>
    {{ session('msg') }}
    <br>
    @foreach ($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
</body>

</html>
