<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Information;
class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([ 'label' => 'facebook' , 'description' =>  'https://www.facebook.com/']);
        Information::create([ 'label' => 'instagram' , 'description' =>  'https://www.instagram.com/']);
        Information::create([ 'label' => 'twitter' , 'description' =>  'https://www.twitter.com/']);
        Information::create([ 'label' => 'whatsapp' , 'description' =>  '51944731380']);
        Information::create([ 'label' => 'phone' , 'description' =>  '691 4753']);
        Information::create([ 'label' => 'mobile' , 'description' =>  '944 731 380']);
        Information::create([ 'label' => 'email' , 'description' =>  'ventas@camiyvaleindustrial.com']);
        Information::create([ 'label' => 'direction' , 'description' =>  'Calle San Carlos 163 Urb. Santa Florencia - San Miguel Lima-Perú']);
        Information::create([ 'label' => 'schedule' , 'description' =>  'Lun-Vie 8:00 am – 6:00 pm /  Sáb. 8:00 am – 4:00 pm']);
    }
}
