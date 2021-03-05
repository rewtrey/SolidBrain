@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Edit Blog  @endslot
            @slot('parent') Dashboard / @endslot
            @slot('active') Blog @endslot
        @endcomponent

        <hr/>

        <form class="form-horizontal" action="{{route('admin.blogs.update', $blog['id'])}}" method="post">
                <input type="hidden" name="_method" value="put">
                {{ csrf_field() }}

                {{-- Form include --}}
                @include('admin.blogs.partials.form')

            </form>
    </div>

@endsection
