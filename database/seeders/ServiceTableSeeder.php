<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([

            'name'=>'Facial Treatment',
            'slug'=>'face-treatment',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
        Service::create([

            'name'=>'Facial Treatment',
            'slug'=>'face-treatment',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
        Service::create([

            'name'=>'Facial Treatment',
            'slug'=>'face-treatment',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
        Service::create([

            'name'=>'Facial Treatment',
            'slug'=>'face-treatment',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
    }
}
