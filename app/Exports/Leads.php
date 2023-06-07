<?php

namespace App\Exports;

use App\Models\User as ModelsUser;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return ModelsUser::all();
    }
}