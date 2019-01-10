@extends('layouts.master')
@section('head.title')
    Bài viết
@stop
@section('body.content')
{{--hiển thị bài viết--}}
<div class="container">
        {{--bắt đầu bài--}}
        <div class="row">
            <div class="col-sm-6 col-sn-offset-3">
                <a href="{{url('/')}}" class="btn btn-link"><span class="glyphicon glyphicon-chevron-left"></span>Back to home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>{{$article->title}}</h2>
                <p>{{$article->content}}</p>
            </div>
        </div>
        {{--kết thúc bài--}}
</div>
{{--hết phần bài viết--}}
@stop
