<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Marchant;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        $services = Service::inRandomOrder()->take(6)->get();
        $testimonials = Testimonial::inRandomOrder()->take(6)->get();
        return view ('index')->with([
                                    'services'=> $services,
                                    'testimonials'=>$testimonials
                                ]);
    }
    public function about() {
        return view ('about');
    }
    public function appointment() {
        return view ('appointment');
    }
    public function contact() {
        return view ('contact');
    }
    public function gallery() {
        return view ('gallery');
    }
    public function service() {
        $services = Service::inRandomOrder()->get();
        return view ('service')->with('services', $services);
    }
    public function testimonial() {
        $testimonials = Testimonial::inRandomOrder()->take(6)->get();
        return view ('testimonial')->with('testimonials', $testimonials);
    }
    public function shop() {
        $products = Product::inRandomOrder()->take(6)->get();
        return view ('shop')->with('products', $products);
    }
    
 
    public function becomeamarchant() {
        return view ('becomemarchant');
    }
    
    public function existingmarchant() {
        $marchnats = Marchant::inRandomOrder()->get();
        return view ('existingmarchants')->with('marchants', $marchnats);
    }
}
