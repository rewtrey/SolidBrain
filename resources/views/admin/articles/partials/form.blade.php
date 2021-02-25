<label for="">Status</label>
<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Not published</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<textarea class="form-control" id="title" name="title">{{$article->title ?? ""}}</textarea>

<label for="">Parent category</label>
<select class="form-control" name="categories[]" multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Description</label>
<textarea class="form-control" id="description" name="description">{{$article->description ?? ""}}</textarea>

<hr />

<label for="">Meta keywords</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta keywords by , " value="{{$article->meta_keyword ?? ""}}">

<hr />

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'title' );
    CKEDITOR.replace( 'description', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>

<input class="btn btn-primary" type="submit" value="Save">
