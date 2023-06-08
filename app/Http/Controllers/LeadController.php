<?php

namespace App\Http\Controllers;

use App\Exports\ExportView;
use App\Exports\LeadsExport;
use App\Models\City;
use App\Models\Lead;
use App\Models\Page;
use App\Models\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class LeadController extends Controller
{
    public function create(Request $request)
    {

        //dd($url);
        //dd($request->tel);
        $request->name = strtolower($request->name);
        //dd($request->name);
        $request->name = (explode(" ",$request->name, 2));
        //dd($request->name);
        $request->lastname = (isset($request->name[1]) ? $request->name[1] : "");
        $request->name = $request->name[0];
        //dd($request->lastname);
        $page = Page::where('id', $request->page_id)->first();
        //dd($page->id);
        $de = array('(',')',' ','-');
        $para = array('','','','');
        $request->tel = "55".str_replace($de, $para, $request->tel);

        $lead = $page->Leads()->create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->tel,
            'email' => isset($request->email) ? $request->email : null,
            'age' => $request->age,
            'state' => 1,
            'city' => $request->city
        ]);
        //$lead = 1;




        

        $fb = new ConversionApiFB;
        $request->city = City::find($request->city1)->name;
        $request->city = str_replace(" ", "", strtolower($request->city));
        $request->state = States::find($request->state1)->abbr;
        $request->state = strtolower($request->state);
        //dd($request->state);
        //$fb->Lead($request);
        $payload = Json_encode($fb->SubmitApplication($request));
        //dd($payload);
        $url = isset($request->fbpx) ? "/page/end?tel=$request->wp&page=premilitar&lead=$payload&fbpx=$request->fbpx" : "/page/end?tel=$request->wp&page=premilitar&lead=$payload";
        //dd($url);
        return Redirect::to($url)->with(["payload" => $payload]);
    }


    public function export($id) 
    {
        $name = Page::find($id)->name;
        return Excel::download(new ExportView($id), "$name.xlsx");   
    }
    

}
