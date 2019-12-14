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
                    <tbody>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$d['id']}}</td>
                            <td>{{$d['name']}}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="/admin/tag/{{$d['id']}}/edit" class="btn btn-default">Edit</a>
                                    <a href="javascript:;" class="btn btn-default" data-toggle="modal" data-target="#delModal">Delete</a>
                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="delModal" tabindex="-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete the tag?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger" onclick="del({{$d['id']}})">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>

    <script>
        function del(id) {
            $.ajax({
                url: '/admin/tag/' + id,
                method: 'DELETE',
                success: function (response) {
                    alert(response.message);
                    location.reload();
                }
            })
        }
    </script>
@endsection
