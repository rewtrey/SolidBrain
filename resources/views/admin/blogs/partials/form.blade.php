<label for="">Status</label>
<select class="form-control" name="published">
    @if (isset($blog->id))
        <option value="0" @if ($blog->published == 0) selected="" @endif>Not published</option>
        <option value="1" @if ($blog->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<textarea class="form-control" id="title" name="title">{!! $blog->title ?? "" !!}</textarea>

<label for="">Parent category</label>
<select class="form-control" name="categories[]" multiple="">
    @include('admin.blogs.partials.categories', ['categories' => $categories])
</select>

<label for="">Description Short</label>
<textarea class="form-control" id="description_short" name="description short">{!! $blog->description_short ?? ""!!}</textarea>

<hr />

<label for="">Description</label>
<textarea class="form-control" id="description" name="description">{{$blog->description ?? ""}}</textarea>

<hr />

<label for="">Meta keywords</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta keywords by , " value="{{$blog->meta_keyword ?? ""}}">

<hr />

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'title' );
    CKEDITOR.replace( 'description_short', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
    CKEDITOR.replace( 'description', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>


<input class="btn btn-primary" type="submit" value="Save">
