@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create Article @endslot
            @slot('parent') Dashboard @endslot
            @slot('active') Article @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.articles.partials.form')

        </form>
    </div>

@endsection
