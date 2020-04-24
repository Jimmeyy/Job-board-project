<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $categoriesTable = [
        'IT', 'Technology', 'Medicine', 'Law', 'Design', 'E-commerce', 'Managment', 'Financial', 'Miner', 'Plummer'
    ];

    public function run()
    {
        Category::truncate();

        foreach($this->categoriesTable as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}