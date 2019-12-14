@extends('admin.layout.master')
@section('content')
    <form action="" method="post" class="form-horizontal" role="form">
        {{csrf_field()}}
        <div class="form-panel panel-default">
            <div class="panel-heading1">
                <h4 class="panel-title">Change Password</h4>
            </div>
            <div class="panel-body">
                <div class="form-group row">
                    <label for="" class="col-sm-2 control-label">Old Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="original_password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password_confirmation">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Save Change</button>
    </form>
@endsection
