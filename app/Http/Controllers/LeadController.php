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
        //dd($request->page_id);
        
        $page = Page::find($request->page_id)->first();
        //dd($page->id);
        $de = array('(',')',' ','-');
        $para = array('','','','');
        $request->tel = "55".str_replace($de, $para, $request->tel);

        $lead = $page->Leads()->create([
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

        $url = isset($request->fbpx) ? "/page/end?tel=5544998354889&page=premilitar&lead=$lead&fbpx=$request->fbpx" : "/page/end?tel=5544998354889&page=premilitar&lead=$lead";

        return Redirect::to($url);
    }


    public function export($id) 
    {
        $name = Page::find($id)->name;
        return Excel::download(new ExportView($id), "$name.xlsx");   
    }
    

}
