<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'name'=>'Ilaha Hajiyeva',
            'image' => 'img/slider/hero.jpg',
            'profile_pic'=> 'img/slider/ilahajiyeva.jpg',
            'logo' => 'img/slider/logo.png',
            "short_text" => "I'm Backend Developer",
            'status' => '1'
        ]);
    }
}
