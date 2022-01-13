<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([ 'name' => 'Vávulas' , 'slug' =>  'valvulas', 'image' => 'img/categories/valvulas.jpg', 'description' => 'Esférica – Compuesta – Globo – Check – Mariposa – Cuchilla – Alivio Seguridad y Filtros – Aguja – Diafragma – Macho plug']);
        Category::create([ 'name' => 'Tuberías' , 'slug' =>  'tuberias', 'image' => 'img/categories/tuberias.jpg', 'description' => 'Fierro Galvanizado 150 LB. UL/FM – Fierro Negro 150 LB. UL/FM – Fierro Negro 300 LB. – Acero X 300 LB. – Acero Inox X 3000 LBS – Acero Inox C-304/316 SCH-40 / 80 – Inox OD Sanitario – PVC – Plastica – Ranuaradas']);
        Category::create([ 'name' => 'Conexiones' , 'slug' =>  'conexiones', 'image' => 'img/categories/conexiones.jpg', 'description' => 'Fierro Galvanizado 150 LB. UL/FM – Fierro Negro 150 LB. UL/FM – Fierro Negro 300 LB. – Acero X 300 LB. – Acero Inox X 3000 LBS – Acero Inox C-304/316 SCH-40 / 80 – Inox OD Sanitario – PVC – Plastica – Ranuaradas']);
        Category::create([ 'name' => 'Bridas' , 'slug' =>  'bridas', 'image' => 'img/categories/bridas.jpg', 'description' => 'Roscada – Slip on – Welding Neck – Ciega – Rompeagua – Lap Joint – Ring Joint – De acero inoxidable – Din – Back up ring – Flange adapter – Spectable blind flange']);
        Category::create([ 'name' => 'Empaquetaduras y Juntas' , 'slug' =>  'empaquetaduras-y-juntas', 'image' => 'img/categories/empaquetaduras-y-juntas.jpg', 'description' => 'empaque o empaquetadura a unos componentes de material adaptable que sirve para sellar bien la unión de las caras mecanizadas de los elementos']);
    }
}