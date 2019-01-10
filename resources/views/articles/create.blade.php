@extends('layouts.master')
@section('head.title')
    Thêm bài viết
@stop
@section('body.content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Thêm mới bài viết</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Vui lòng điền nội dung hợp lệ</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('articles.store')}}" method="POST" class="form-hozizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <lable for="title" class="control-label">Tên bài viết: </lable>
                        <input class="form-control" type="text" name="title" placeholder="Tên bài ">
                    </div>
                     <div class="form-group">
                         <lable for="title" class="control-label">Nội dung: </lable>
                         <input class="form-control" type="text" name="content" placeholder="Nội dung bài viết">
                     </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Thêm bài viết</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
