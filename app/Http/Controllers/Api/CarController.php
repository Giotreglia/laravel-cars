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

    public function show($id){
        $cars = Car::where('id',$id)->with('optionals')->first();

        

        if($projects){
            return response()->json([
                'success'=>true,
                'results'=> $cars
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'error'=> 'Non trovato'
            ]);
        }
            
    }
}
