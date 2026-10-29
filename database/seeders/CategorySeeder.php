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
            'Oblečenie'     => ['Pánske', 'Dámske', 'Detské', 'Topánky'],
            'Elektronika'   => ['Mobilné telefóny', 'Počítače', 'Televízory', 'Audio'],
            'Dom a bývanie' => ['Nábytok', 'Kuchyňa', 'Záhrada'],
            'Šport'         => ['Bicykle', 'Fitness', 'Zimné športy'],
            'Doplnky'       => [],
            'Ostatné'       => [],
        ];

        foreach ($categories as $name => $subs) {
            $category = Category::updateOrCreate(
                ['slug' => Str::slug($name)],
                ['category_name' => $name]
            );

            foreach ($subs as $subName) {
                Subcategory::updateOrCreate(
                    ['category_id' => $category->id, 'slug' => Str::slug($subName)],
                    ['subcategory_name' => $subName]
                );
            }
        }
    }
}
