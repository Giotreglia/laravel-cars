@extends('layouts.app')

@section('page-title')
   
@endsection

@section('content')

<h1 class="text-white">Dettagli</h1>

    <div class="card my-5">
        <div class="row g-0">
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">{{$car->model}}</h5>
              <p class="card-text">{{$car->brand}}</p>
              <p class="card-text"><small class="text-body-secondary">{{$car->price}}</small></p>
              <p class="card-text"><small class="text-body-secondary"></small>{{$car->cc}}&euro;</p>
              <p class="card-text"><small class="text-body-secondary"></small>{{$car->year_release}}</p>
              <a href="{{route('cars.index')}}" class="btn btn-secondary">Torna alla lista</a>
            </div>
          </div>
        </div>
      </div>

@endsection