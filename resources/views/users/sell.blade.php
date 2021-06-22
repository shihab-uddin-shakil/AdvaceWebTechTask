@extends('users.chome')
@section('content1')
    <form method="post" style="border:1px solid #ccc">
        <div class="container">
            @csrf
            <h1>Sell Product</h1>

            <hr>
            <br>
            <label for="name"><b>Name</b></label>
            <br>
            <input type="text" placeholder="Enter Product Name" name="name" required>
            <br>
            <br>
            <label for="category"><b>Category</b></label>
            <br>
            <input type="text" placeholder="category" name="category" required>
            <br><br>

            <label for="price"><b>price</b></label>
            <br>
            <input type="number" placeholder="price" name="price" required>
            <br><br>

            <label for="qty"><b>price</b>Quantity</label>
            <br>
            <input type="number" placeholder="qty" name="qty" required>
            <br><br>
            <label for="sprice">Selling price</label>
            <br>
            <input type="number" name="sprice" required>
            <br><br>




            <div class="clearfix">
                <input type="submit" value="Add" name="submit" class="signupbtn">
            @stop
