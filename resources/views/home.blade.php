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
            <strong class="subtitle">
                {{ $subtitle }}
            </strong>
        </section>
    </header>
</body>

</html>
