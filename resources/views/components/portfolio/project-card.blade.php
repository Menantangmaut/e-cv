@props(['project'])

<article class="project-card">
    <div class="project-art project-art--{{ $project['visual'] }}" aria-hidden="true">
        <span class="project-art__index">{{ $project['number'] }}</span><span class="project-art__shape"></span><span class="project-art__orbit"></span><span class="project-art__caption">CATATAN PROYEK · {{ $project['number'] }}</span>
    </div>
    <div class="project-card__body">
        <div class="project-card__meta"><p class="eyebrow">PROYEK {{ $project['number'] }}</p><span>Dalam pengembangan</span></div>
        <h3>{{ $project['title'] }}</h3>
        <p class="project-card__description">{{ $project['description'] }}</p>
        <ul class="tag-list" aria-label="Teknologi yang digunakan">@foreach ($project['technologies'] as $technology)<li>{{ $technology }}</li>@endforeach</ul>
    </div>
</article>
