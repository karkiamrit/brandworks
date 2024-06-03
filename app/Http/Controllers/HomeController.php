<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $logos = array(
            array(
                'name' => 'avani',
                'image' => 'home/avani-logo.png'
            ),
            array(
                'name' => 'brandwork',
                'image' => 'home/logo.png'
            ),
            array(
                'name' => 'limex',
                'image' => 'home/limez-marketing.png'
            ),
            array(
                'name' => 'Marching Ant',
                'image' => 'home/marching-ant.png'
            ),
            array(
                'name' => 'Mantra',
                'image' => 'home/mantra-it.png'
            ),
            array(
                'name' => 'Impact',
                'image' => 'home/impact.png'
            ),

        );
        return view('home.index', compact(['logos']));
    }

    public function about()
    {
        return view('home.about');
    }

    public function events()
    {
        return view('home.events');
    }
}
