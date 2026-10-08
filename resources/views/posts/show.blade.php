@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="card shadow-sm">
    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" style="max-height: 300px; object-fit: cover;">
    @endif
    <div class="card-body">
        <h2>{{ $post->title }}</h2>
        <small class="text-muted">Dibuat: {{ $post->created_at->format('d M Y H:i') }}</small>
        <hr>
        <p style="white-space: pre-wrap;">{{ $post->content }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">✏️ Edit</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" 
              onsubmit="return confirm('Yakin ingin menghapus post ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">🗑️ Hapus</button>
        </form>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm">← Kembali</a>
    </div>
</div>
@endsection