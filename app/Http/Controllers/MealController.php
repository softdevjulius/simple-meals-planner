<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function landing()
    {
        $meals = [
            "Ugali",
            "Rice",
            "Githeri",
            "Mukimo",
            "Ugali",
            "Rice",
            "Githeri Ovacado",
            "Mukimo Avocado",
            "Ugali Beef",
            "Rice kamande",
            "Githeri",
            "Mukimo",
            "Ugali",
            "Rice Fish",
            "Nduma with Waru",
        ];


        shuffle($meals);
        $days_of_the_week = [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday",
        ];
        return view("landing",compact("meals",'days_of_the_week'));
    }

    public function breakfast()
    {
        $meals = [ //Fruits and light meals
            "Bananas",
"Mangoes",
"Pineapples",
"pomegranate",
"Oranges",
"Watermelons",
"Pawpaws (Papayas)",
"Avocados",
//"Passion Fruits",
//"Guavas",
//"Tamarind",
"Apples",
"Pears",
//"Plums",
//"Peaches",
"Lemons",
//"Limes",
//"Grapes",
//"Strawberries",
"Dates",
//"Coconuts",
//"Jackfruit",
//"Lychees",
"Dragon Fruit (Pitaya)",
"Soursop (Graviola)",
//    "Mulberries",
//"Gooseberries",
//"Raspberries",
//"Blackberries",
//"Strawberries",
//"Cranberries",
            "eggs",
            "eggs",
            "eggs",
        ];


        shuffle($meals);
        $days_of_the_week = [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday",
        ];
        return view("landing",compact("meals",'days_of_the_week'));
    }
}
