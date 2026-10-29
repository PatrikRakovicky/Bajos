<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Oblečenie' => [
                'icon' => 'tag',
                'subs' => ['Pánske', 'Dámske', 'Detské', 'Topánky'],
            ],
            'Elektronika' => [
                'icon' => 'device-phone-mobile',
                'subs' => ['Mobilné telefóny', 'Počítače', 'Televízory', 'Audio'],
            ],
            'Dom a bývanie' => [
                'icon' => 'home',
                'subs' => ['Nábytok', 'Kuchyňa', 'Záhrada'],
            ],
            'Šport' => [
                'icon' => 'trophy',
                'subs' => ['Bicykle', 'Fitness', 'Zimné športy'],
            ],
            'Doplnky' => [
                'icon' => 'sparkles',
                'subs' => [],
            ],
            'Ostatné' => [
                'icon' => 'squares-2x2',
                'subs' => [],
            ],
        ];

        foreach ($categories as $name => $data) {
            $category = Category::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'category_name' => $name,
                    'category_icon' => $data['icon'],
                ]
            );

            foreach ($data['subs'] as $subName) {
                Subcategory::updateOrCreate(
                    ['category_id' => $category->id, 'slug' => Str::slug($subName)],
                    ['subcategory_name' => $subName]
                );
            }
        }
    }
}
