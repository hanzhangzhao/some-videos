@extends('admin.layout.master')
@section('content')
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Tag List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/tag/create">New Tag</a>
        </li>
    </ul>
    <form action="" method="post" class="form-horizontal" role="form">
        <div class="panel panel-default">
            <div class="panel-heading1">
                <h4 class="panel-title">Video Tag List</h4>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="100">Id</th>
                        <th>Tag</th>
                        <th width="120">Operations</th>
                    </tr>
                    </thead>
{{--                    <tbody>--}}
{{--                    @foreach($data as $d)--}}
{{--                        <tr>--}}
{{--                            <td>{{$d['id']}}</td>--}}
{{--                            <td>{{$d['name']}}</td>--}}
{{--                            <td>--}}
{{--                                <div class="btn-group btn-group-sm">--}}
{{--                                    <a href="/admin/tag/{{$d['id']}}/edit" class="btn btn-default">Edit</a>--}}
{{--                                    <a href="javascript:;" onclick="del({{$d['id']}})"--}}
{{--                                       class="btn btn-default">Delete</a>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
                </table>
            </div>
        </div>
    </form>
{{--    <script>--}}
{{--        function del(id) {--}}
{{--            require(['util'], function (util) {--}}
{{--                util.confirm('Are you sure?', function () {--}}
{{--                    $.ajax({--}}
{{--                        url: '/admin/tag/' + id,--}}
{{--                        method: 'DELETE',--}}
{{--                        success: function (response) {--}}
{{--                            util.message(response.message, 'refresh');--}}
{{--                        }--}}
{{--                    })--}}
{{--                })--}}
{{--            })--}}
{{--        }--}}
{{--    </script>--}}
@endsection
