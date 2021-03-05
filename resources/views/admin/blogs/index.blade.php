@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Blog list @endslot
            @slot('parent') Dashboard / @endslot
            @slot('active') Blog @endslot
        @endcomponent
        <hr>
        <a href="{{route('admin.blogs.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create Blog</a>
        <table class="table table-striped">
            <thead>
            <th>Blogs</th>
            <th>Description</th>
            <th>Post</th>
            <th class="text-right">Actions</th>
            </thead>
            <tbody>
            @forelse ($blogs as $blog)
                <tr>
                    <td>{!! $blog->title !!}</td>
                    <td>{!! $blog->description !!}</td>
                    <td>{{$blog->published}}</td>
                    <td class="text-right">
                        <form action="{{route('admin.blogs.destroy', $blog['id'])}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf

                            <a class="btn btn-default" href="{{route('admin.blogs.edit', $blog['id'])}}"><i class="fa fa-edit"></i></a>
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
                    {{$blogs->links()}}
                </ul>
            </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
