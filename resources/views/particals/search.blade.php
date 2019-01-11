
<form action="{{route('search')}}" method="GET" class="search-form">
<input class="form-control" type="text" name="query" id="query" value="{{request()->input('query')}}" class="search-box" placeholder="Otsing" aria-label="Search" required>
</form>