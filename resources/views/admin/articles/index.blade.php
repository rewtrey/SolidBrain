@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Atricle list @endslot
            @slot('parent') Dashboard / @endslot
            @slot('active') Article @endslot
        @endcomponent
        <hr>
        <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Create Article</a>
        <table class="table table-striped">
            <thead>
            <th>Articles</th>
            <th>Description</th>
            <th>Post</th>
            <th class="text-right">Actions</th>
            </thead>
            <tbody>
            @forelse ($articles as $article)
                <tr>

                    <td>{!! $article->title !!}</td>
                    <td>{!! $article->description !!}</td>
                    <td>{!! $article->published !!}</td>
                    <td class="text-right">
                        <form action="{{route('admin.article.destroy', $article['id'])}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf

                            <a class="btn btn-default" href="{{route('admin.article.edit', $article['id'])}}"><i class="fa fa-edit"></i></a>
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
                    {{$articles->links()}}
                </ul>
            </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
