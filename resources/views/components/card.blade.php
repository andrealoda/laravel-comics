@props(['image' => '', 'title' => '', 'subtitle' => null])

<div class="card bg-transparent" style="width: 9rem;">
  <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}">
  <div class="card-body">
    <p class="card-text text-white">{{ $title }}</p>
    @if ($subtitle)
      <p class="card-text text-secondary">{{ $subtitle }}</p>
    @endif
  </div>
</div>