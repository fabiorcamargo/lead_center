<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Page;
use App\Models\States;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function create(Request $request){
        $state = (States::find($request->state)->first()->abbr);
        $city = (City::find($request->city)->first()->name);
        dd($request->all());

        Page::create([
            'name' => $request->name . " | $city - $state",
        ]);
    }
    public function city($id)
    {
        $cities = City::where("state_id",$id)
                    ->pluck('name','id');
                   //dd($cities);
        return json_encode($cities);
    }
}
