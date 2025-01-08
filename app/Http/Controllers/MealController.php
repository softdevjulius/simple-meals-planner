<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{

    public function lunch()
    {
        $meals = config("Meals");
        shuffle($meals);
        $days_of_the_week = config("Days");

        return view("landing",compact("meals",'days_of_the_week'));
    }

    public function breakfast()
    {
        $meals = config("Breakfast");
        shuffle($meals);
        $days_of_the_week = config("Days");

        return view("landing",compact("meals",'days_of_the_week'));
    }
}
