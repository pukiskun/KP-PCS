<?php

namespace App\Exports;

use App\Models\ListMobil;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMobil implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $result = ListMobil::join('kondisi_mobils', 'list_mobils.nopol', '=', 'kondisi_mobils.nopol')
            ->get(['list_mobils.*', 'kondisi_mobils.*']);

        return $result;
    }


}
