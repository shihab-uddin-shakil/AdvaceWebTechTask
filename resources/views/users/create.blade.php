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
        <h1 class="h3 mb-4 text-gray-800">Create New User</h1>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @if ($mode == 'edit')
                <h6 class="h3 mb-4 text-gray-800">Update </h6>
            @else
                <h6 class="m-0 font-weight-bold text-primary">New User</h6>
            @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="row">
                    <div class="col md-6">

                        @if (@isset($user))
                            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}


                        @else
                            {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}


                        @endif
                        <div class="form-group">



                            <label for="group">Group</label>
                            {!! Form::select('group_id', $groups, null, ['class' => 'form-control', 'id' => 'group_id', 'placeholder' => 'Select Group']) !!}
                        </div>
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
                            <label for="phone">Phone</label>
                            {!! Form::tel('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'phone']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'email']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            {!! Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'address']) !!}
                        </div>
                    </div>
                </div>

                <br>
                @if ($mode == 'edit')
                    <input type="submit" class="btn btn-info" value="Update User">
                @else
                    <input type="submit" class="btn btn-primary" value="Add User">
                @endif

                {!! Form::close() !!}


            </div>
        </div>
    @stop
