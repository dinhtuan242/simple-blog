<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show articles</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
{{--phần menu--}}
<nav class="navbar navbar-expand-xl bg-white btn-danger">
    <a class="navbar-brand" href="#">Coders Việt</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thêm bài</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Chuyên mục</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Laravel</a>
                    <a class="dropdown-item" href="#">NodeJS</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
    </div>
</nav>
{{--hết menu--}}


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
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
