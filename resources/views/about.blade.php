<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Site</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        @include('partials.navbar')

        <section>
            <h1 class="title">
                {{ $title }}
            </h1>
        </section>
    </header>

    <main>
        <section>
            <h2>
                {{ $team_section['title'] }}
            </h2>

            <p>
                {{ $team_section['paragraph'] }}
            </p>

            <ul class="card-container">
                @foreach ($team_section['team'] as $member)
                    <li>
                        <x-card :primary_line="$member['name'] . ' ' . $member['lastname']" :secondary_line="$member['email']" />
                    </li>
                @endforeach
            </ul>
        </section>
    </main>
</body>

</html>
