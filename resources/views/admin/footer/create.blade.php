@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Footer @endslot
            @slot('parent') Dashboard / @endslot
            @slot('active') Footer @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.footer.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.footer.partials.form')

        </form>
    </div>

@endsection
