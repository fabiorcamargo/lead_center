<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class LeadsExport implements FromCollection, WithHeadings, WithColumnFormatting
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


    
    public function columnFormats(): array
    {
        return [
            'B' => NumberFormat::FORMAT_NUMBER,
            'E' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            
        ];
    }
}
