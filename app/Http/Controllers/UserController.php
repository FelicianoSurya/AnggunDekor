<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class UserController extends Controller
{
    public function index(){
        return view('Page.home', [
            'productType' => ProductType::all()
        ]);
    }
}
