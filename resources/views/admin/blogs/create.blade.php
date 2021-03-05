@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create Blog @endslot
            @slot('parent') Dashboard @endslot
            @slot('active') Blog @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.blogs.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.blogs.partials.form')

        </form>
    </div>

@endsection
