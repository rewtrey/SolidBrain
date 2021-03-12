
<label for="">About Us</label>
<textarea class="form-control" id="aboutUs" name="aboutUs">{!! $footer->aboutUs ?? ""!!}</textarea>

<hr />

<label for="">Copyright</label>
<input type="text" class="form-control" name="copyright" placeholder="Copyright" value="{{$footer->copyright ?? ""}}">
<hr />

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'aboutUs', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>

<input class="btn btn-primary" type="submit" value="Save">
