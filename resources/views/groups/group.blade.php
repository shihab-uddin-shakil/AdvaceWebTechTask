@extends('layout.main');
@section('main_content')
    <h1>Group</h1>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <div class="row">
                    <div class="col md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Groups Data</h6>
                    </div>
                    <div class="col md-6">
                        <p> <a class=" btn btn-info m-left " href="{{ url('groups/create') }}"> New Group</a> </p>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->title }}</td>
                                    <td>
                                        <form method="post" action="{{ url('/groups/' . $group->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are You Sure Want to delete?')" type="submit"
                                                class=" btn btn-danger" href="{{ url('/groups') }}"><i
                                                    class="fas  fa fa-trash"></i>Delete</button>
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
@stop
