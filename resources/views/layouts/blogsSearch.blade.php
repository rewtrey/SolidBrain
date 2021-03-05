
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


<form action="{{url('/search')}}" method="get" autocomplete="off" style="position: absolute">
    <div class="input-group mb-3">
        <!-- HideSeek Input -->
        <input id="search" placeholder ="Search blog" class="typeahead form-control" style="margin:0px auto;width:300px;" type="text">
    </div>
</form>

    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $('#search').typeahead({
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>

    <br>
    <br>
