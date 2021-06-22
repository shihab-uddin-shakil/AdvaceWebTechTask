<h1>Dashboard</h1>
<p>Well come to customer account.</p>
<hr>
<br>
<a type="button" href="{{ url('/customer') }}" class="cancelbtn">Home</a>
<br>
<br>
<a type="button" href="{{ url('/addproduct') }}" class="cancelbtn">Add Product</a>
<br>
<br>
<a type="button" href="{{ url('/') }}" class="cancelbtn">Logout</a>
<br>
<br>
@yield('content1')
{{ session('message') }}
