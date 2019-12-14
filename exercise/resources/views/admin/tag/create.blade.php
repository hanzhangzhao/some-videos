@extends('admin.layout.master')
@section('content')
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="/admin/tag">Tag List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">New Tag</a>
        </li>
    </ul>
    <form action="/admin/tag" method="post" class="form-horizontal" role="form">
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">Create Tag</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Tag Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" >
                    </div>
                </div>

            </div>
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection
