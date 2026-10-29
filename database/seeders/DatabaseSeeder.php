<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
        ]);

        $testUser = User::factory()->create([
            'username' => 'testuser',
            'email' => 'test@example.com',
        ]);

        User::factory(9)->create();

        $electronics = Category::where('slug', 'elektronika')->firstOrFail();
        $phones = Subcategory::where('category_id', $electronics->id)
            ->where('slug', 'mobilne-telefony')
            ->firstOrFail();

        Product::create([
            'user_id' => $testUser->id,
            'category_id' => $electronics->id,
            'subcategory_id' => $phones->id,
            'title' => 'Poco X6 Pro',
            'description' => 'Mobilný telefón Poco X6 Pro, 16 GB RAM, 512 GB úložisko. Veľmi dobrý stav, plne funkčný.',
            'price' => 329.00,
            'image' => null,
        ]);

        Product::factory(49)->create();
    }
}
