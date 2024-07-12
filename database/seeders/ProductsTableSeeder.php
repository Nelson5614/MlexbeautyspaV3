<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=> 'Quava Leafs',
            'slug'=> 'quava-leafs',
            'details'=>'10g bag',
            'price' =>'120',
            'description'=>'Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah',
            
        ]);
        Product::create([
            'name'=> 'Quava Leafs',
            'slug'=> 'quava-leafs',
            'details'=>'10g bag',
            'price' =>'120',
            'description'=>'Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah',
            
        ]);
        Product::create([
            'name'=> 'Quava Leafs',
            'slug'=> 'quava-leafs',
            'details'=>'10g bag',
            'price' =>'120',
            'description'=>'Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah',
            
        ]);
        Product::create([
            'name'=> 'Quava Leafs',
            'slug'=> 'quava-leafs',
            'details'=>'10g bag',
            'price' =>'120',
            'description'=>'Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah',
            
        ]);
        Product::create([
            'name'=> 'Quava Leafs',
            'slug'=> 'quava-leafs',
            'details'=>'10g bag',
            'price' =>'120',
            'description'=>'Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah Lorem blah',
            
        ]);
    }
}
