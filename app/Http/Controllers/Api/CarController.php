<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::with('optionals')->paginate(3);

        return response()->json(
            [
                'success'=>true,
                'results'=>$cars
            ]
        );
    }
}
