@extends('layouts.app')

@section('title', 'Cars - index')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Price</th>
                <th scope="col">Cc</th>
                <th scope="col">Realease year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->price }} €</td>
                    <td>{{ $car->cc }} cc</td>
                    <td>{{ $car->year_release }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('cars.show', ['car' => $car->id]) }}">Vedi dettagli</a>
                        <a class="btn btn-warning" href="{{ route('cars.edit', ['car' => $car->id]) }}">Modifica</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('cars.destroy', ['car' => $car->id]) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
