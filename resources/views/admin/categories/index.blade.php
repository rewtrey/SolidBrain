@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Сategory list @endslot
            @slot('parent') Dashboard / @endslot
            @slot('active') Category @endslot
        @endcomponent
        <hr>
        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create category</a>
        <table class="table table-striped">
            <thead>
            <th>Category Name</th>
            <th>Post</th>
            <th class="text-right">Actions</th>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td class="text-right">
                        <form action="{{route('admin.category.destroy', $category['id'])}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf

                            <a class="btn btn-default" href="{{route('admin.category.edit', $category['id'])}}"><i class="fa fa-edit"></i></a>
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
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination -pull-right">
                        {{$categories->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
