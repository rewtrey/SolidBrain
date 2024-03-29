@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                    <a class="btn btn-block btn-default"
                       href="{{route('admin.category.create')}}">Create Category</a>
                    <a class="btn btn-block btn-default"
                       href="{{route('admin.article.create')}}">Create Page</a>
                    <a class="btn btn-block btn-default"
                       href="{{route('admin.blogs.create')}}">Create Blog</a>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">number of visits 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">number of visits today 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default"
                   href="">Categories</a>
                <br>
                @foreach ($categories as $category)
                <a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
                    <h4 class="list-group-item-heading">{{$category->title}}</h4>
                    <p class="list-group-item-text">
                        {{$category->articles()->count()}}
                    </p>
                </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Pages</a>
                @foreach($articles as $article)
                <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
                    <h4 class="list-group-item-heading">{!! $article->title !!}</h4>
                    <p class="list-group-item-text">
                        {{$article->categories()->pluck('title')->implode(', ')}}
                    </p>
                    @endforeach
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Blogs</a>
                @foreach($blogs as $blog)
                    <a class="list-group-item" href="{{route('admin.blogs.edit', $blog)}}">
                        <h4 class="list-group-item-heading">{!! $blog->title !!}</h4>
                        <p class="list-group-item-text">
                            {{$blog->categories()->pluck('title')->implode(', ')}}
                        </p>
                        @endforeach
                    </a>
            </div>
        </div>
    </div>

@endsection
