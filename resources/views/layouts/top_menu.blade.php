
@foreach ($categories as $category)

    @if($category->children->where('published', 1)->count())
        <button class="nav__link nav__link_offset p-0 dropdown-toggle" type="button">
            <a href="{{url("/$category->slug")}}"
               data-toggle="dropdown" role="button" aria-expanded="false">
                {{$category->title}}
            </a>

        <ul class="dropdown-menu">
            @include('layouts.top_menu', ['categories' => $category->children->where('published', 1)])
        </ul>
        </button>

    @else
        <li>
            <a href="{{url("/$category->id/$category->slug")}}">{{$category->title}}</a>
        </li>
        @endif

        </li>
        @endforeach

