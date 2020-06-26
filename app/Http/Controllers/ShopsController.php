<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopsRequest;
use Illuminate\Http\Request;
use App\Shop;

class ShopsController extends Controller
{
    public function index(){
        return Shop::with('user')->paginate(2);
    }

    public function store(ShopsRequest $request){
        return Shop::create($request->all());
    }

    public function search($term){
        return Shop::where('name', 'LIKE', '%' . $term .'%')->get();
    }

    public function getMyShops($id){
        return Shop::where('user_id', $id)->get();
    }
}
