{{-- <div class="container">
    <h1 class="mt-4 mb-4">News</h1>

    <form action="{{ url('/news') }}" method="get" class="mb-4">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cari">Search:</label>
                <input type="text" class="form-control" name="cari" value="{{ isset($searchTerm) ? $searchTerm : '' }}">
            </div>
            <div class="form-group col-md-4">
                <label for="from">From:</label>
                <input type="date" class="form-control" name="from" value="{{ isset($datefrom) ? $datefrom : '' }}">
            </div>
            <div class="form-group col-md-4">
                <label for="to">To:</label>
                <input type="date" class="form-control" name="to" value="{{ isset($dateto) ? $dateto : '' }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    @foreach($articles as $article)
        <div class="article-container">
            <h2>{{ $article['title'] }}</h2>
            @if(isset($article['urlToImage']))
                <img src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}" class="img-fluid mb-3">
            @endif
            <p>{{ $article['description'] }}</p>
            <p>Published At: {{ $article['publishedAt'] }}</p>
            <a href="{{ $article['url'] }}" target="_blank" class="btn btn-info">Read More</a>
        </div>
    @endforeach
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}