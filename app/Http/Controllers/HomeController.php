<?php


namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Post as ModelsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use App\Models\Rubrick;

class HomeController extends Controller
{

    public function index()
    {
        // $query= DB::insert("INSERT INTO posts(title,content) VALUES(:title,:content )",['content'=>'State cintent 5','title'=>'State 5']);Добавление
        // DB::update('UPDATE posts Set created_at=?,updated_at=? Where created_at Is Null Or updated_at Is Null',[ Now(), Now()]); Обновление
        // DB::delete("DELETE FROM posts Where id > :id",['id'=>5]);
        // DB::beginTransaction();//Транзакции тип оброботка ошибки
        // try {
            // DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [NOW()]); как в гит
            // DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
            // DB::commit();
        // } catch (\Exception $e) {
            // DB::rollBack(); откат
            // echo $e->getMessage();
            // $data =DB::table('country')->select('Code','Name')->orderBy('Code','desc')->first(); Первыйц в бд
            // $data =DB::table('city')->select('ID','Name')->find(2);по ай ди вычиислил
           
            // $data = DB::table('city')->select('ID','Name')->where([ с спис условиями
            //     ['id','>',1],
            //     ['id','<',5]
            // ])->get();
            // $data =DB::table('city')->select('ID','Name')->where('id',"=",2)->get(); с условием
            // $data = DB::table('country')->limit(10)->pluck('Name','Code'); опр валуе
            // $data = DB::table('country')->count(); количество
            // $data = DB::table('country')->max('Population'); max min пон сортир по колву 
            // $data =DB::table('country')->avg('Population');avg - average(Средние) sum - summa (сумма)
            

            // $data = DB::table('city')->select('CountryCode')->distinct()->get();//Выборка уник знач
            // $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')->limit(10)->join('country', 'city.CountryCode', '=', 'country.Code')->orderBy('city.ID')->get(); join объеденяем всю уйню
            
            // $data = Country::all() ; Все элементы
            // $data = Country::query()->limit(5)->get();5 первых лимит
            // $data = Country::limit(5)->get();
            // $data = Country::where('Code','<','ALB')->select('Code','Name')->offset(1)->limit(5)->get();Where - где, Select - опр столбцы, Offset с какого начинать выборку,
            // $data = City::find(5); Поиск args
            // $post = new  ModelsPost();В бд по модели
            // $post->title= 'Cnfnmz1'; Заполнение
            // $post->content = "loream ipsum 1"; Заполнение
            // $post->save();Сохранение
            // ModelsPost::create(['title'=>'Post5','content'=>'Chat Huesosov ahahhahah']);
            // $post = new ModelsPost();
            // $post->fill(['title'=>'Post6','content'=>'Ili net']);
            // $post->save();

            // $post= ModelsPost::find(2);
            // $post->content='New contect Omg';
            // $post->save();

            // $post = ModelsPost::find(3);
            // $post->delete();
            // $post =ModelsPost::find(2) ;
            // dd($post->title,$post->rubrick->title);Обращаемся к рубреке черезь связь с посттом
            // $rubrick=Rubrick::find(3);
            // dd($rubrick->title,$rubrick->post->title);Тож самое ток через рубрик к посту
            $rubrick=Rubrick::find(1);
            dd($rubrick->posts);
        }
        // dump($_ENV['MY_SETTING']);
        // dump(env('MY_SETTING2'));
        // dump(config('database.connections.mysql.database'));
        // dump($_ENV);

    public function test(){
        return __METHOD__;
    }
 
};
