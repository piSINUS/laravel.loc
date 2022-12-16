<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        // $query= DB::insert("INSERT INTO posts(title,content) VALUES(:title,:content )",['content'=>'State cintent 5','title'=>'State 5']);
        DB::update('UPDATE posts Set created_at=?,updated_at=? Where created_at Is Null Or updated_at Is Null',[ Now(), Now()]);
        $posts= DB::select("SELECT * From posts Where id > :id",['id'=>0]);
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
