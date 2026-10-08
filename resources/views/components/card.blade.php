<div class="card mb-3 shadow-sm">
    @if($image)
        <img src="{{ asset('storage/' . $image) }}" class="card-img-top" alt="{{ $title }}" style="max-height: 200px; object-fit: cover;">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ Str::limit($body, 150) }}</p>
        <a href="{{ $url }}" class="btn btn-primary btn-sm">Baca Selengkapnya →</a>
    </div>
    <div class="card-footer text-muted">
        <small>{{ $date }}</small>
    </div>
</div>