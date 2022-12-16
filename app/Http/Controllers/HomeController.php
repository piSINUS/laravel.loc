<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $query= DB::insert("INSERT INTO posts(title,content) VALUES(?,? )",['State 3','Stete content3']) ;

        var_dump($query);

        $posts= DB::select("SELECT * FROM posts");
        return $posts;
        // dump($_ENV['MY_SETTING']);
        // dump(env('MY_SETTING2'));
        // dump(config('database.connections.mysql.database'));
        // dump($_ENV);
        return view('home',['res' => 5,'name'=>"john"]);
    } 
    public function test(){
        return __METHOD__;
    }
 
};
