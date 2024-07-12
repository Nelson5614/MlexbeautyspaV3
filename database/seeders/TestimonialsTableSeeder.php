<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name'=>'Tebello Mathebeng',
            'slug'=>'client-img',
            'description'=>'Mlex Beauty Spa e se e na le lilemo tse fetang boraro e ntse e thusa basotho ka litsebeletsoe tse tsoileng'
        ]);
        Testimonial::create([
            'name'=>'Tebello Mathebeng',
            'slug'=>'client-img',
            'description'=>'Mlex Beauty Spa e se e na le lilemo tse fetang boraro e ntse e thusa basotho ka litsebeletsoe tse tsoileng'
        ]);
        Testimonial::create([
            'name'=>'Tebello Mathebeng',
            'slug'=>'client-img',
            'description'=>'Mlex Beauty Spa e se e na le lilemo tse fetang boraro e ntse e thusa basotho ka litsebeletsoe tse tsoileng'
        ]);
        Testimonial::create([
            'name'=>'Tebello Mathebeng',
            'slug'=>'client-img',
            'description'=>'Mlex Beauty Spa e se e na le lilemo tse fetang boraro e ntse e thusa basotho ka litsebeletsoe tse tsoileng'
        ]);
        Testimonial::create([
            'name'=>'Tebello Mathebeng',
            'slug'=>'client-img',
            'description'=>'Mlex Beauty Spa e se e na le lilemo tse fetang boraro e ntse e thusa basotho ka litsebeletsoe tse tsoileng'
        ]);
    }
}
