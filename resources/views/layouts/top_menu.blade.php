@foreach ($categories as $category)

    @if($category->children->where('published', 1)->count())
        <li class="dropdown">
            <a href="{{url("/$category->slug")}}" class="dropdown-toggle"
               data-toggle="dropdown" role="button" aria-expanded="false">
                {{$category->title}}
            </a>
                    <ul class="dropdown-menu">
                        @include('layouts.top_menu', ['categories' => $category->children])
                    </ul>
                @else
                    <li>
                        <a href="{{url("/$category->slug")}}">{{$category->title}}</a>
                    </li>
                @endif

        </li>
            @endforeach



