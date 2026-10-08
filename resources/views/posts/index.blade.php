@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>📚 Daftar Post</h2>

    <form action="{{ route('posts.index') }}" method="GET" class="d-flex">
        <input type="text" name="search" class="form-control form-control-sm me-2" 
               placeholder="Cari post..." value="{{ request('search') }}">
        <button class="btn btn-outline-primary btn-sm" type="submit">Cari</button>
    </form>
</div>

@if($posts->count())
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6 col-lg-4">
                <x-card 
                    :title="$post->title" 
                    :body="$post->content" 
                    :image="$post->image"
                    :url="route('posts.show', $post)" 
                    :date="$post->created_at->format('d M Y')" 
                />
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
@else
    <div class="alert alert-info">Belum ada post. <a href="{{ route('posts.create') }}">Buat yang pertama!</a></div>
@endif
@endsection