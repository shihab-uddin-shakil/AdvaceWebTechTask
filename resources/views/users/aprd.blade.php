@extends('users.ahome')
@section('content2')
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr<th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Qunatity</th>
                <th>Selling Price</th>
            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Qunatity</th>
                <th>Selling Price</th>



            </tr>
        </tfoot>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>

                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->sprice }}</td>



                </tr>
            @endforeach


        </tbody>
    </table>
@stop
