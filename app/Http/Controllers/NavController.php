<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

    public static function catalog() {
        $books = DB::table('books')->get();
        $data = [
            'books' => [
                [
                    'title' => 'coucou',
                    'author' => 'machin'
                ]
            ]
        ];
        return view('catalog', ['books' => $books]);
    }
}