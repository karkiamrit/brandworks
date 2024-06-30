<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        // Read the JSON file
        $json = Storage::get('data.json');

        // Decode the JSON file to an associative array
        $dataList = json_decode($json, true);

        return view('home.index', compact(['logos', 'dataList']));
    }

    public function events()
    {
        return view('home.events');
    }

    public function blogs()
    {
        return view('home.blogs');
    }
}
