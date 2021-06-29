<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1レコード
        $category = new Category([
            'category' => 'カテゴリA'
        ]);
        $category->save();
        // 2レコード
        $category = new Category([
            'category' => 'カテゴリB'
        ]);
        $category->save();
        // 3レコード
        $category = new Category([
            'category' => 'カテゴリC'
        ]);
        $category->save();

    }
}
