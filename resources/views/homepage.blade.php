<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <h2>Lista Case</h2>

            <ul>
                @foreach ($houses as $house)
                    <li>
                        <h3>{{$house->type}}</h3>
                        <h4>{{$house->city}}</h4>
                        <p>
                            {{$house->address}}
                        </p>
                        <div>
                            <strong>{{$house->price}}€</strong>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </main>

</body>

</html>
