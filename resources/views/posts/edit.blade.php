@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-warning">
        <h4 class="mb-0">🔄 Edit Post</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('posts._form', ['post' => $post])

            <button type="submit" class="btn btn-warning">🔄 Update Post</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection