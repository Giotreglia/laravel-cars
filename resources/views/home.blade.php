<!DOCTYPE html>
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

    <div>
            @forelse ( $cars as $car )
                {{$car->brand}} - {{$car->price}}
            @empty
                <p>tutto venduto</p>
            @endforelse

            <button><a href="{{ route('cars.index') }}">Mostra la index</a></button>
            <button><a href="{{ route('cars.show',['car'=>$car->id]) }}">Mostra la show</a></button>
            <button><a href="{{ route('cars.edit',['car'=>$car->id]) }}">Mostra la edit</a></button>
            <button><a href="{{ route('cars.destroy',['car'=>$car->id]) }}">Mostra la destroy</a></button>
    </div>

</body>

</html>
