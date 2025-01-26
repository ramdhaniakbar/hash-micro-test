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

    public function update_dish_title(Request $request)
    {
        $dish = MenuDishes::find($request->id);
        if ($dish) {
            $dish->name = $request->name;
            $dish->save();
            toastr()->success('Title updated successfully');
            return response()->json(['success' => 'Title updated successfully']);
        }

        toastr()->error('Dish not found');
        return response()->json(['error' => 'Dish not found'], 404);
    }
}
