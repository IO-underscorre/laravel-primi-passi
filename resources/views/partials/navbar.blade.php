@php
    $navbar_links = [
        [
            'name' => 'HOME',
            'url' => '/',
        ],
        [
            'name' => 'ABOUT US',
            'url' => '/about',
        ],
    ];
@endphp

<nav class="top-bar">
    <ul>
        <li class="logo">
            <img src="{!! asset('images/logo.png') !!}" alt="">
        </li>

        <li>
            <menu class="top-bar-links">
                @foreach ($navbar_links as $link)
                    <li>
                        <a href="{!! $link['url'] !!}" class="{!! Request::getRequestUri() == $link['url'] ? 'active' : null !!}">
                            {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
            </menu>
        </li>
    </ul>
</nav>
