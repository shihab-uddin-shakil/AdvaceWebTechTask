<form method="post" style="border:1px solid #ccc">
    <div class="container">
        @csrf
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <br>
        <label for="name"><b>Name</b></label>
        <br>
        <input type="text" placeholder="Enter Name" name="name" required>
        <br>
        <br>
        <label for="uname"><b>User Name</b></label>
        <br>
        <input type="text" placeholder="Enter User Name" name="uname" required>
        <br><br>

        <label for="address"><b>Address</b></label>
        <br>
        <input type="text" placeholder="Enter Address" name="address" required>
        <br><br>

        <label for="phone"><b>Phone</b></label>
        <br>
        <input type="text" placeholder="Enter Phone" name="phone" required>
        <br><br>
        <label for="email"><b>Email</b></label>
        <br>
        <input type="text" placeholder="Enter Email" name="email" required>
        <br><br>

        <label for="password"><b>Password</b></label>
        <br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br><br>





        <div class="clearfix">
            <a type="button" href="{{ url('/') }}" class="cancelbtn">Login</a>
            <input type="submit" value="signup" name="signup" class="signupbtn">
        </div>
    </div>
</form>
<br>
{{ session('msg') }}
<br>
@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach
