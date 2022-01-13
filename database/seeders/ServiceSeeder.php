<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([ 'name' => 'Galvanizado en Caliente' , 'slug' =>  'galvanizado-en-caliente', 'image' => 'img/service/galvanizado-en-caliente.jpg', 'description' => '<p>La galvanización es un procedimiento para recubrir metales de hierro/acero mediante su inmersión en un crisol de zinc fundido a 450 °C, con el objetivo evitar la oxidación y corrosión que el medio ambiente puede ocasionar sobre el hierro.</p>']);
        Service::create([ 'name' => 'Arenado/Sandblasting' , 'slug' =>  'sandblasting', 'image' => 'img/service/sandblasting.jpg', 'description' => '<p>El arenado o chorro de arena es una técnica industrial de limpieza de superficies basada en la proyección de arena conjuntamente con aire a presión. La arena era el abrasivo tradicional, de donde originó el nombre. Mundialmente se conoce también como sandblasting.<br><br>
        En la actualidad hay muchos otros abrasivos que la han sustituido, porque el proceso de arenado es considerado altamente nocivo para la salud de los operarios.<br><br>
        Los sistemas modernos de proyección de partículas por aire comprimido, equipos de arenado o granallado, trabajan indistintamente con cualquier tipo de abrasivos. Esto permite, utilizando un mismo equipo, seleccionar el abrasivo adecuado para cada tipo de trabajo. 
       </p>']);
       Service::create([ 'name' => 'Granallado ' , 'slug' =>  'granallado', 'image' => 'img/service/granallado.jpg', 'description' => '<p>El proceso de granallado es una técnica de tratamiento superficial por impacto con el cual se puede lograr un excelente grado de limpieza y simultáneamente una correcta terminación superficial en una amplia gama de piezas metálicas y no metálicas.</p>']);
       Service::create([ 'name' => 'Fabricaciones de Piezas Especiales' , 'slug' =>  'fabricaciones-de-piezas-especiales', 'image' => 'img/service/fabricaciones-de-piezas-especiales.jpg', 'description' => '<p>Ofrecemos a nuestros clientes un buen servicio de corte por hilo CNC y electroerosión. Contamos con un centro de mecanizado y torneado CNC. Nos dedicamos a la fabricación de piezas especiales</p>']);
    }
}
