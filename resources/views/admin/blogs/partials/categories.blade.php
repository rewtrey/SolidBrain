@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($blog->id)

            @foreach ($blog->categories as $category_blog)
            @if ($category->id == $category_blog->id)
            selected="selected"
        @endif
        @endforeach
        @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.blogs.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
