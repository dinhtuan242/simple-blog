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
                <form action="#" class="form-hozizontal">
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
