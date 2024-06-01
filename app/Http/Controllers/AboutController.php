<?php

namespace App\Http\Controllers;

use App\Models\ImageInformation;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $imageInformation = ImageInformation::all();

        return view('about.index', compact('imageInformation'));
    }
}
