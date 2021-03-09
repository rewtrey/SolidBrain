@extends('layouts.app')

@section('content')

    @if ($blogs==NULL)
        @foreach ($blogs as $blog)
            <div class="container">
                <div class="row">
                    <div align="right"><th>By: </th><td>{{ $blog->user->name}}</td>
                        <br>
                    </div>
                    <div class="col-sm-12">
                <h1>{!! $blog->title!!}</h1>
                {!! $blog->description!!}

    </div>
        </div>
    </div>
        @endforeach
@endsection
