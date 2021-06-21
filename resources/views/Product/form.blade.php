@extends('layout.main');
@section('main_content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($mode == 'edit')
        <h1 class="h3 mb-4 text-gray-800">Update information </h1>
    @else
        <h1 class="h3 mb-4 text-gray-800">Create New Product</h1>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @if ($mode == 'edit')
                <h6 class="h3 mb-4 text-gray-800">Update </h6>
            @else
                <h6 class="m-0 font-weight-bold text-primary">New Product</h6>
            @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="row">
                    <div class="col md-6">

                        @if (@isset($product))
                            {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'put']) !!}


                        @else
                            {!! Form::open(['route' => 'products.store', 'method' => 'post']) !!}


                        @endif

                    </div>
                </div>
                <div class="row">
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) !!}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="phone">Quantity</label>
                            {!! Form::number('Qty', null, ['class' => 'form-control', 'id' => 'Qty', 'placeholder' => 'Qty']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="email">Price</label>
                            {!! Form::number('Price', null, ['class' => 'form-control', 'id' => 'Price', 'placeholder' => 'Price']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="address">Pictures</label>
                            {{-- {!! Form::text('image', null, ['class' => 'form-control', 'id' => 'image', 'placeholder' => 'image']) !!} --}}
                            {!!Form::file('image', null, ['class' => 'form-control', 'id' => 'image', 'placeholder' => 'image'])!!}
                        </div>
                    </div>
                </div>

                <br>
                @if ($mode == 'edit')
                    <input type="submit" class="btn btn-info" value="Update product">
                @else
                    <input type="submit" class="btn btn-primary" value="Add product">
                @endif

                {!! Form::close() !!}


            </div>
        </div>
    @stop
