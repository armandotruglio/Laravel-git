@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Elenco dei Post</h1>
    <a href="{{route('posts.create')}}" class="btn btn-primary mb-3">Aggiungi Nuovo Post</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <a href="{{ url('/posts/' . $post->id) }}" class="btn btn-info btn-sm">Visualizza</a>
                        <a href="{{ url('/posts/' . $post->id . '/edit') }}" class="btn btn-warning btn-sm">Modifica</a>
                        <form action="{{ url('/posts/' . $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sei sicuro di voler eliminare questo post?');">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
