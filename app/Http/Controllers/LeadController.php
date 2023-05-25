<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Lead;
use App\Models\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LeadController extends Controller
{
    public function create(Request $request)
    {
        //dd($request->all());
        $de = array('(',')',' ','-');
        $para = array('','','','');
        $request->tel = "55".str_replace($de, $para, $request->tel);

        $lead = Lead::create([
            'page_id' => $request->page_id,
            'name' => $request->name,
            'lastname' => "",
            'phone' => $request->tel,
            'email' => isset($request->email) ? $request->email : null,
            'age' => $request->age,
            'state' => 1,
            'city' => $request->city
        ]);
        //$lead = 1;

        $fb = new ConversionApiFB;
        $request->city = City::find($request->city1)->name;
        $request->state = States::find($request->state1)->abbr;

        //dd($request->state);
        $fb->Lead($request);
        return Redirect::to("/page/end?tel=5544998354889&page=premilitar&lead=$lead");
    }
}
