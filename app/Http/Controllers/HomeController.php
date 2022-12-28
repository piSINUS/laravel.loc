<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

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
            // $data =DB::table('country')->select('Code','Name')->orderBy('Code','desc')->first();
            // $data =DB::table('city')->select('ID','Name')->find(2);
            $data =DB::table('city')->select('ID','Name')->where('id',"=",2)->get();
            dump($data);
            
        }
        // dump($_ENV['MY_SETTING']);
        // dump(env('MY_SETTING2'));
        // dump(config('database.connections.mysql.database'));
        // dump($_ENV);

    public function test(){
        return __METHOD__;
    }
 
};
