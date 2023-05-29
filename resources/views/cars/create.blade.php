@extends('layouts.app')

@section('title', 'Cars - create')

@section('content')

   <form action="{{ route("cars.store") }}" method="POST">

   @csrf


    <div class="mb-3">
            <label for="brand" class="form-label">Brand:</label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{ old('brand') }}">
            @error('brand')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}">
            @error('model')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
            <label for="cc" class="form-label">cc:</label>
            <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc" name="cc" value="{{ old('cc') }}">
            @error('cc')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
            <label for="year_release" class="form-label">year_release:</label>
            <input type="text" class="form-control @error('year_release') is-invalid @enderror" id="year_release" name="year_release" value="{{ old('year_release') }}">
            @error('year_release')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
            @foreach($optionals as $optional)
                <input id="optionals_{{$optional->id}}" @if (in_array($optional->id , old('optionals', []))) checked @endif type="checkbox" name="optionals[]" value="{{$optional->id}}">
                <label for="optionals_{{$optional->id}}"  class="form-label">{{$optional->name}}</label>
                <br>
            @endforeach
            @error('optionals')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection