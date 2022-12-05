<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        dump($_ENV['MY_SETTING']);
        dump(env('MY_SETTING2'));
        dump(config('database.connections.mysql.database'));
        dump($_ENV);
        return view('home',['res' => 5,'name'=>"john"]);
    } 
    public function test(){
        return __METHOD__;
    }
 
};
