<?php

namespace App\Exports;

use App\Invoice;
use App\Models\Lead;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class ExportView implements FromView, WithColumnFormatting
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

    public function columnFormats(): array
    {
        return [
            'B' => NumberFormat::FORMAT_NUMBER,
            
        ];
    }
}
