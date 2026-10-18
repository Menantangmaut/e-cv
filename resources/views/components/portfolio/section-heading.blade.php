@props(['number', 'eyebrow', 'title', 'theme' => 'light', 'id' => null])

<div class="section-heading section-heading--{{ $theme }}">
    <p class="eyebrow"><span class="eyebrow__number">{{ $number }}</span>{{ $eyebrow }}</p>
    <h2 @if ($id) id="{{ $id }}" @endif>{{ $title }}</h2>
</div>
