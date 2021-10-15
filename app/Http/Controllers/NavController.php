<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;


class NavController extends Controller
{
    public static function accueil() {
        return view('accueil');
    }

    public static function contact() {
        return view('contact');
    }

    public static function about() {
        return view('about');
    }
}