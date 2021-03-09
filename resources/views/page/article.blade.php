@extends('layouts.app')
@section('meta_keyword', $article->meta_keyword )
@section('content')

    <div class="container">
        <div class="row">
            <div align="right"><th>By: </th><td>{{ $article->user->name}}</td>
                <br>
                <th>Added: </th><td>{{ $article->created_at}}</td>
            </div>
            <div class="col-sm-12">
                <h1>{!! $article->title!!}</h1>
                {!! $article->description!!}
            </div>
        </div>
    </div>
@endsection
