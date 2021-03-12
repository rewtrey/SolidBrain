@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Footer @endslot
            @slot('parent') Dashboard / @endslot
            @slot('active') Footer @endslot
        @endcomponent
        <hr>
        <a href="{{route('admin.footer.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create Footer</a>
        <table class="table table-striped">
            <thead>
            <th>About Us</th>
            <th>Copyright</th>
            <th class="text-right">Actions</th>
            </thead>
            <tbody>
            @forelse ($footers as $footer)
                <tr>
                    <td>{!! $footer->aboutUs !!}</td>
                    <td>{!! $footer->copyright !!}</td>
                    <td class="text-right">
                        <form action="{{route('admin.footer.destroy', $footer['id'])}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf

                            <a class="btn btn-default" href="{{route('admin.footer.edit', $footer['id'])}}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>empty</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
