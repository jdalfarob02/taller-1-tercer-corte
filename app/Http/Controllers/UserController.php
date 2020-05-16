<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    
    public function index()
    {
       $tok= csrf_token();
        return $tok;
    }
    
    public function store(UserRequest $request)
    {
        $data=$request->all();
        return $data;
    }



}