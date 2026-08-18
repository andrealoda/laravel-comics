@php
$menuItems = [
    [ 'name' => 'Characters', 'link' => '#' ],
    [ 'name' => 'Comics', 'link' => '#' ],
    [ 'name' => 'Movies', 'link' => '#' ],
    [ 'name' => 'TV', 'link' => '#' ],
    [ 'name' => 'Games', 'link' => '#' ],
    [ 'name' => 'Collectibles', 'link' => '#' ],
    [ 'name' => 'Videos', 'link' => '#' ],
    [ 'name' => 'Fans', 'link' => '#' ],
    [ 'name' => 'News', 'link' => '#' ],
    [ 'name' => 'Shop', 'link' => '#' ],
];
@endphp


<nav class="navbar navbar-expand-lg bg-white px-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/dc-logo.png') }}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @foreach ($menuItems as $item)
                <li class="nav-item p-2 text-dark">
                    <a href="{{ $item['link'] }}" class="text-black text-decoration-none">{{ $item['name'] }}</a>
                </li>
                @endforeach



            </ul>
        </div>
    </div>
</nav>