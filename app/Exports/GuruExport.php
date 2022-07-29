<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuruExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Guru::all();
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
            'RT',
            'RW',
            'Nama Dusun',
            'Desa Klurahan',
            'Kecamatan',
            'Pangkat Golongan',

        ];
    }
}
