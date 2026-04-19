<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            'Fabric' => ['Cotton', 'Polyester', 'Wool', 'Silk'],
            'Sleeve' => ['Full Sleeve', 'Half Sleeve', 'Sleeveless'],
            'Pattern' => ['Solid', 'Striped', 'Checked', 'Printed'],
        ];

        foreach ($attributes as $key => $values) {
            $attribute = Attribute::create([
                'name' => $key,
                'slug' => Str::slug($key),
                'status' => 1,
            ]);
            foreach ($values as $value) {
                AttributeValue::create([
                    'attribute_id' => $attribute->id,
                    'value' => $value
                ]);
            }
        }
    }
}
