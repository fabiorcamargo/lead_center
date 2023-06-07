<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeadsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $lead;

    public function __construct($lead)
    {
        //dd($lead);
        $leads = Lead::where('page_id', $lead)->get(['name', 'phone', 'age', 'city', 'created_at']);
        //dd($leads);
        $this->lead = $leads;
    }

    public function collection()
    {
        return $this->lead;
    }
    
    public function headings(): array
    {
        return [
            'Nome',
            'Telefone',
            'Idade',
            'Cidade',
            'Data'
        ];
    }
}
