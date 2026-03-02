<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Warranty;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\{
    ToModel,
    WithHeadingRow,
    WithValidation
};

class WarrantyImport implements
    ToModel,
    WithHeadingRow,
    WithValidation
{
    public function rules(): array
    {
        return [
            '*.customer_name' => 'required',
            '*.phone'         => 'required',
            '*.product_name'  => 'required',
            '*.start_date'    => 'required|date',
            '*.end_date'      => 'required|date|after_or_equal:*.start_date',
        ];
    }

    public function customValidationMessages()
    {
        return [
            '*.customer_name.required' => 'Thiếu tên khách hàng',
            '*.phone.required'         => 'Thiếu số điện thoại',
            '*.product_name.required'  => 'Thiếu tên sản phẩm',
            '*.start_date.date'        => 'Ngày bắt đầu không hợp lệ',
            '*.end_date.after_or_equal' => 'Ngày kết thúc phải >= ngày bắt đầu',
        ];
    }

    public function model(array $row)
    {
        $product = Product::where('name', $row['product_name'])->first();

        if (!$product) {
            throw new \Exception("Sản phẩm '{$row['product_name']}' không tồn tại.");
        }

        $customer = Customer::firstOrCreate(
            ['phone' => $row['phone']],
            [
                'name'    => $row['customer_name'],
                'email'   => $row['email'] ?? null,
                'address' => $row['address'] ?? null,
            ]
        );

        return new Warranty([
            'customer_id'   => $customer->id,
            'product_id'    => $product->id,
            'serial_number' => $row['serial_number'] ?? null,
            'start_date'    => Carbon::parse($row['start_date']),
            'end_date'      => Carbon::parse($row['end_date']),
            'note'          => $row['note'] ?? null,
        ]);
    }
}
