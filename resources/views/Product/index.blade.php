<!DOCTYPE html>
<html>

<head>
    <title>Product</title>
</head>

<body>

    <h3> Product</h3>


    <h1>User</h1>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <div class="row">
                    <div class="col md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Products Data</h6>
                    </div>
                    <div class="col md-6">
                        <p> <a class=" btn btn-info m-left " href="{{ url('users/create') }}"> New Product</a> </p>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products as $product) --}}
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->Qty }}</td>
                                    <td>{{ $product->Price }}</td>
                                    <td><img src="{{ asset('{{ $product->image }}') }}" alt="" border=3 height=100 width=100></img></td>

                                    <td>
                                        <form method="POST"
                                            action="{{ route('users.destroy', ['user' => $product->id]) }}">

                                            <a class="btn btn btn-primary"
                                                href="{{ route('users.edit', ['user' => $product->id]) }}"> <i
                                                    class="fa fa-edit"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are You Sure Want to delete?')"
                                                type="submit" class=" btn btn-danger"><i
                                                    class="fas  fa fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</body>

</html>
