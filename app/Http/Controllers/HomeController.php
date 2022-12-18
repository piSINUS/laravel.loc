<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        // $query= DB::insert("INSERT INTO posts(title,content) VALUES(:title,:content )",['content'=>'State cintent 5','title'=>'State 5']);Добавление
        // DB::update('UPDATE posts Set created_at=?,updated_at=? Where created_at Is Null Or updated_at Is Null',[ Now(), Now()]); Обновление
        // DB::delete("DELETE FROM posts Where id > :id",['id'=>5]);
        // DB::beginTransaction();//Транзакции тип оброботка ошибки
        // try {
            // DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [NOW()]);
            // DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
            // DB::commit();
        // } catch (\Exception $e) {
            // DB::rollBack();
            // echo $e->getMessage();
            $data= DB::table('country')->get();

        }
        
        
        $posts= DB::select("SELECT * From posts Where id > :id",['id'=>0]);//Получение
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
