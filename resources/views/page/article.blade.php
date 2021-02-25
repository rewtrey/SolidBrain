@extends('layouts.app')


@section('meta_keyword', $article->meta_keyword )


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{!! $article->title!!}</h1>
                {!! $article->description!!}
            </div>
        </div>
    </div>
@endsection
