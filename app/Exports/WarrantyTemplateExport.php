<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WarrantyTemplateExport implements FromArray, WithHeadings
{
    public function headings(): array
    {
        return [
            'customer_name',
            'phone',
            'email',
            'address',
            'product_name',
            'serial_number',
            'start_date',
            'end_date',
            'note',
        ];
    }

    public function array(): array
    {
        return [
            [
                'Nguyen Van A',
                '0909123456',
                'a@gmail.com',
                'Ha Noi',
                'Ten san pham',
                'SN123456',
                '2026-01-01',
                '2027-01-01',
                'Ghi chu',
            ],
        ];
    }
}
