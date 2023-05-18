<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Page;
use App\Models\States;
use Illuminate\Http\Request;
use stdClass;

class PageController extends Controller
{
    public function create(Request $request){
        $state = (States::find($request->state)->first()->abbr);
        $city = (City::find($request->city)->first()->name);
        //dd($request->all());

        $body = json_encode([
            'name' => $request->name,
            'title' => $request->title,
            'slug' => $request->slug,
            'subtitle' => $request->subtitle,
            'desc' => $request->desc,
            'state' => $state,
            'city' => $city
        ]);

        //dd(($body));
        if((Page::where('slug', $request->slug)->first())){
            $status = "Esse slug já existe";
            return back()->withErrors(['slug' => __($status)])->withInput();
        } else {
        Page::create([
            'name' => $request->name,
            'title' => $request->title,
            'slug' => $request->slug,
            'body'=> $body
        ]);
        $status = "$request->name criada com sucesso";
        return back()->with('status', __($status));
    }
    
    }

    public function city($id)
    {
        $cities = City::where("state_id",$id)
                    ->pluck('name','id');
                   //dd($cities);
        return json_encode($cities);
    }
}
