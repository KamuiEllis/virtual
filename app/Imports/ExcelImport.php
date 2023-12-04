<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToModel
{

    public function model(array $row)
    {
        // Define how to create a model from the Excel row data
        return new Product([
            'name' => $row[2],
            'sku' => $row[6],
            'shortDescription' => '',
            'description' => $row[7],
            'quantity' => $row[5],
            'cost' =>   $row[4],
            'type' => 'physical',
            'subcategory' => $row[1],
            'productType' => $row[0],
            'unboxing' => '',
            'partNumber' => $row[6],
            'brand' => $row[3],
            'colors' => '',
            'image' => '',
            'weight' => $row[8]
            // Add more columns as needed
        ]);
    }
}
