@extends('admin.layout.master')
@section('content')
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="/admin/video">Video List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/admin/video/create">New Video</a>
        </li>
    </ul>
    <form action="/admin/video" method="post" class="form-horizontal" role="form">
        {{csrf_field()}}
        <div class="panel panel-default" id="app">
            {{--            outer header--}}
            <div class="panel-heading1">
                <h4 class="panel-title">Add Video</h4>
            </div>

            {{--            outer frame--}}
            <div class="container" v-for="(v,k) in videos">
                {{--                inner element, add a video--}}
                <div class="panel-body1">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" v-model="v.title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Intro</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="intro" rows="5" v-model="v.intro"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Preview</label>
                        <div class="col-sm-10">
                            <input type="file" class="input" name="preview" id="prevUp" v-model="v.preview">
                            <div class="input-group" style="margin: 5px 0" id="prevPic">
                                <img src="" class="img-thumbnail img-responsive" width="150">
                            </div>
                        </div>

                        <script>

                            $('#prevUp').change(function () {
                                if ($(this).val() != '') {
                                    upload();
                                }
                            });

                            function upload() {
                                alert("1")
                                let file_data = $('#prevUp').prop('files')[0];
                                let form_data = new FormData();
                                form_data.append('file', file_data);
                                console.log(form_data)
                                $.ajaxSetup({
                                    headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
                                });
                                {{--$('#img1').html('<img src="{{asset('images/loader.gif')}}" style="padding-top: 40%"/>');--}}
                                $.ajax({
                                    url: '/admin/video/create',
                                    data: form_data,
                                    type: 'POST',
                                    contentType: false,       // The content type used when sending data to the server.
                                    cache: false,             // To unable request pages to be cached
                                    processData: false,
                                    success: function (data) {
                                        $('#prevPic').html('<img width="100%" height="100%" src="{{asset('uploads')}}/' + data + '"/>');
                                    },
                                });
                            }


                        </script>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Path</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="path" v-model="v.path">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Trending</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isHot" value="1" v-model="v.isHot">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isHot" value="0" checked
                                       v-model="v.isHot">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Click Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="click" value="0" v-model="v.click">
                        </div>
                    </div>
                </div>
                {{--                //inner cancel the adding process--}}
                <div class="panel-foot">
                    <button type="button" class="btn btn-secondary" @click="del(k)">Remove</button>
                </div>
            </div>

            {{--            outer generate another input group--}}
            <div class="panel-foot">
                <button type="button" class="btn btn-success" @click="add">Add More Video</button>
            </div>
            {{--            check data that will be sent to laravel --}}
            {{--            <textarea rows="10">@{{ videos }}</textarea>--}}
        </div>

        <button class="btn btn-primary">Save</button>
    </form>

    <script src="\node_modules\vue\dist\vue.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                videos: [{title: '', intro: '', preview: '', path: '', isHot: '', click: ''}]
            },
            methods: {
                add: function () {
                    this.videos.push({
                        title: '', intro: '', preview: '', path: '', isHot: '', click: '',
                    });
                },
                del: function (k) {
                    this.videos.splice(k, 1);
                }
            }
        })
    </script>

@endsection
