@extends('layouts.app')

@section('title', $category->title . " - Solid Brain")

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
    </div>

@endsection


