<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnersRequest;
use Illuminate\Http\Request;
use App\Owner;

class OwnersController extends Controller
{
    public function store(OwnersRequest $request){
        return Owner::create($request->all());
    }

    public function index(){
        return Owner::paginate(2);
    }
}
