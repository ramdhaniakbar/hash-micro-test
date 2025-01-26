<?php

namespace App\Http\Controllers;

use App\Models\MenuDishes;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $dishes = MenuDishes::latest()->get();
        // $dishes = [];
        return view('pages.landing', compact('dishes'));
    }
}
