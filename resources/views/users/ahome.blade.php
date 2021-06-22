<h1>Dashboard</h1>
<p>Well come to Admin account.</p>
<hr>
<br>
<a type="button" href="{{ url('/admin') }}" class="cancelbtn">Home</a>
<br>
<br>
<a type="button" href="{{ url('/a_products') }}" class="cancelbtn"> Product</a>
<br>
<br>
<a type="button" href="{{ url('/') }}" class="cancelbtn">Logout</a>
<br>
<br>
@yield('content2')
{{ session('message') }}
