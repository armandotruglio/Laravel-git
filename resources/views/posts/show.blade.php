@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <h2>{{ $post->title }}</h2>
            <p class="text-muted">Autore: {{ $post->author }}</p>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ url('/posts') }}" class="btn btn-secondary">Torna all'elenco</a>
            <a href="{{ url('/posts/' . $post->id . '/edit') }}" class="btn btn-warning">Modifica</a>
            <form action="{{ url('/posts/' . $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo post?');">Elimina</button>
            </form>
        </div>
    </div>
</div>
@endsection
