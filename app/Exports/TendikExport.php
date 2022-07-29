<?php

namespace App\Exports;

use App\Models\Tendik;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TendikExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Tendik::all();
    }
    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Nip',
            'Agama',
            'Alamat',
            'Kecamatan',
            'Pangkat Golongan',

        ];
    }
}
