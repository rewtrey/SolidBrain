@extends('layouts.app')

@section('title', $category->title)

@section('content')

    @if ($category->title === 'Blog' )
<div class="row articles">
    @foreach ($articles as $article)
        <div class="col-4">
            <div class="card">
                <a href=""></a>
                <div class="card-body">
                    <h2><a href="{{route('article', [$article->slug, $category->slug])}}">{!! $article->title !!}</a></h2>
                    <p class="card-text">{!! $article->description_short !!}</p>
                    <th>By: </th><td>{{ $article->user->name}}</td>
                    <br>
                    <th>Added: </th><td>{{ $article->created_at}}</td>
                </div>
            </div>
        </div>
    @endforeach
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
                                <th>Added: </th><td>{{ $article->created_at}}</td>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    @else
@section('content')
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
@endsection

@endif
@endif
@endsection



