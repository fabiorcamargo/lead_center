<?php

namespace App\Exports;

use App\Invoice;
use App\Models\Lead;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportView implements FromView
{
    private $lead;

    public function __construct($lead)
    {
        //dd($lead);
        $leads = Lead::where('page_id', $lead)->get();
        //dd($leads);
        $this->lead = $leads;
    }
    public function view(): View
    {
        return view('exports.lead_export', [
            'pages' => $this->lead
        ]);
    }
}
