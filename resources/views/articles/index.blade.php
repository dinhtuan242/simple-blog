@extends('layouts.master')
@section('head.title')
    Trang chủ
@stop
@section('body.content')
{{--hiển thị bài viết--}}
<div class="container">
    @foreach($articles as $a)
        {{--bắt đầu bài--}}
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>{{$a->title}}</h2>
                <p>{{$a->content}}</p>
                <p><a href="{{route('article.show', $a->id)}}">Read more</a></p>
            </div>
        </div>
        {{--kết thúc bài--}}
    @endforeach
</div>
{{--hết phần bài viết--}}
@stop
