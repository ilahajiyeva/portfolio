<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'About Me',
            'description' => "I am a backend developer specializing in PHP(Laravel).",
            'title'=> 'Backend Developer',
            'phone' => '+994 xxx xx xx',
            'email' => 'hajiyevailahe@gmail.com',
            'address' => 'Baku, AZ',
            'birthday' => '13-12-1992',
            'portfolio' => 'github.com/ilahajiyeva',
            'status' => '1'
        ]);

    }
}
