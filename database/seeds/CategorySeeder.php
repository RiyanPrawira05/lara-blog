<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
        	'name' => 'CodeIgneter',
        	'slug' => str_slug('CodeIgneter')
        ]);

        Categories::create([
        	'name' => 'PHP NATIVE',
        	'slug' => str_slug('PHP NATIVE')
        ]);

        //bisa memakai ini tidak perlu menggunakan cmd code seperti ini (php artisan db:seed--class=CategorySeeder)

        //$this->call(CategorySeeder::class); tetapi menggunakan seperti ini (php artisan db:seed)
    }
}
