@extends('layouts.app')

@section('title', $category->title)

@section('content')


    <br>
    <br>
    <br>
    <br>

    @if ($category->title == 'Blog')
        <div class="row articles">
            @foreach ($blogs as $blog)
                <div class="col-4">
                    <div class="card">
                        <a href=""></a>
                        <div class="card-body">
                            <h2><a href="{{route('blog', [$blog->slug, $category->slug])}}">{!! $blog->title !!}</a></h2>
                            <p class="card-text">{!! $blog->description_short !!}</p>
                            <th>By: </th><td>{{ $blog->user->name}}</td>
                            <br>
                            <th>Added: </th><td>{{ $blog->created_at}}</td>
                        </div>
                    </div>
                </div>
            @endforeach
                @include('admin.blogs.search.blogsSearch')
            {{$blogs->links()}}
        </div>
@endif

    @if ($category->title === 'SolidBrain (Home)')
        @include ('layouts.index');
    @endif

    @if ($category->title === 'Software Development Services')
        @include ('layouts.services');
    @endif

    @if ($category->title === 'E-commerce')
        @include ('layouts.industries');
    @endif


    @if (isset($category->title))
    <div class="container">
        @forelse ($articles as $article)
            <div class="row">
                <div class="col-sm-12">
                    <h1>{!! $article->title !!}</a></h1>
                    <p>{!!$article->description!!}</p>
                </div>
            </div>
        @empty
            <h2 class="text-center">empty</h2>
        @endforelse

        {{$articles->links()}}
</div>
    @endif


@endsection







