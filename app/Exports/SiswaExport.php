<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Siswa::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Jenis Kelamin',
            'NISN',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Agama',
            'Alamat',
            'Nama Ayah',
            'Nama Ibu',
            'Kelas',

        ];
    }
}
