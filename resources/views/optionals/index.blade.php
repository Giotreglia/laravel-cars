@extends('layouts.app')

@section('title', 'Cars - index')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($optionals as $optional)
                <tr>
                    <th scope="row">{{ $optional->id }}</th>
                    <td>{{ $optional->name }}</td>
                    <td>{{ $optional->slug }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('cars.index')}}">Torna alla pagina iniziale</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
