<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([ 'name' => 'Compuerta' , 'slug' =>  'valvulas', 'category_id' => 1, 'image' => 'img/categories/valvulas.jpg', 'description' =>'']);
        Product::create([ 'name' => 'Globo' , 'slug' =>  'tuberias', 'category_id' => 1, 'image' => 'img/categories/tuberias.jpg', 'description' => '']);
        Product::create([ 'name' => 'Mariposa' , 'slug' =>  'conexiones', 'category_id' => 1, 'image' => 'img/categories/conexiones.jpg', 'description' => '']);
        Product::create([ 'name' => 'Esférica' , 'slug' =>  'bridas', 'category_id' => 1,'image' => 'img/categories/bridas.jpg', 'description' => '' ]);
        Product::create([ 'name' => 'Check' , 'category_id' => 1, 'slug' =>   'empaquetaduras-y-juntas', 'image' => 'img/categories/empaquetaduras-y-juntas.jpg', 'description' => '']);
        Product::create([ 'name' => 'Cuchilla' , 'category_id' => 1, 'slug' =>   'empaquetaduras-y-juntas', 'image' => 'img/categories/empaquetaduras-y-juntas.jpg', 'description' => '']);
        Product::create([ 'name' => 'Aguja' , 'category_id' => 1, 'slug' =>   'empaquetaduras-y-juntas', 'image' => 'img/categories/empaquetaduras-y-juntas.jpg', 'description' => '']);
    }
}
