@extends('layout.main');
@section('main_content')
    <h1 class="h3 mb-4 text-gray-800">Create New Group</h1>
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">New Group</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               <form method="post">
                               @csrf
                                    <div class="form-group">
                                    <label for="title"> Enter Group Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                    <br>
                                       <input type="submit" class="btn btn-primary" value="Add Title">
                             </form>

                               
                            </div>
                        </div>
                    </div>
@stop