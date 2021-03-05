@extends('layouts.app')

@section('title', $category->title)

@section('content')

    @if ($category->title === 'Blog')
        @include('layouts.blogsSearch')
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
            {{$blogs->links()}}
        </div>
    @else
        @if ($category->title === 'Careers' )
            <div class="row articles">
                @foreach ($articles as $article)
                    <div class="col-4">
                        <div class="card">
                            <a href=""></a>
                            <div class="card-body">
                                <h2><a href="{{route('article', [$article->slug, $category->slug])}}">{!! $article->title !!}</a></h2>
                                <p class="card-text">{!! $article->description_short !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            @if ($category->title === 'Portfolio')
                <div class="row articles">
                    @foreach ($articles as $article)
                        <div class="col-4">
                            <div class="card">
                                <a href=""></a>
                                <div class="card-body">
                                    <h2><a href="{{route('article', [$article->slug, $category->slug])}}">{!! $article->title !!}</a></h2>
                                    <p class="card-text">{!! $article->description_short !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
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
    @include('contactForm.contacts')
</div>
        @endif
    @endif

    @endif
@endsection







