@extends("layouts.app");

@section("content")
<<div class="container">
    @if  ($errors->any())
        <div class="row">
            <div class="col-12 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("posts.store") }}">
            @csrf

            <h1 class="mb-3">
                Aggiungi un Post:
            </h1>
            <div class="mb-3">
                <label for="post-title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="post-title" name="title">
            </div>
            <div class="mb-3">
                <label for="cpost_author" class="form-label">Autore:</label>
                <input type="text" class="form-control" id="post-author" name="author">
            </div>
            <div class="mb-3">
                <label for="post-content" class="form-label">Contenuto:</label>
                <input type="text" class="form-control" id="post-content" name="content">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Aggiungi
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
