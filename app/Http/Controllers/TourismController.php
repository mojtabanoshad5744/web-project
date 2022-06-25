<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourism;

class TourismController extends Controller
{
     function index(){
        $data =[
            "type"=>"mosafer",
            "firstname"=> "mojtaba",
            "price"=>50
        ];
    
        //$name = request('name');
        return view('details' ,[
            "data" => $data,
            "name" => request('name')
        ]); 
    }
     function show( $id){
        return view('details' ,["id"=>$id]);
    }

}
