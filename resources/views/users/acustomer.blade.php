@extends('users.ahome')
@section('content2')
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>


            </tr>
        </tfoot>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>

                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->uname }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>



                </tr>
            @endforeach


        </tbody>
    </table>
@stop
