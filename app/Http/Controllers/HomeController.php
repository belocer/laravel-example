<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index () {
        // Сырые запросы
        //DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['Статья 3', 'Контент статьи 3']);
        //DB::insert("INSERT INTO posts (title, content) VALUES (:title, :content)", ['title' => 'Статья 3', 'content' => 'Контент статьи 3']);
        //$posts =  DB::select('SELECT * FROM posts');
        $posts =  DB::table('posts')->get();
        //$posts =  DB::table('posts')->first();
        //$countries =  DB::select('SELECT * FROM country LIMIT 5');
        //$countries =  DB::table('country')->limit(5)->get();
        //$countries =  DB::table('country')->select('Code', 'Name')->limit(5)->get();
        //$countries =  DB::table('country')->select('Code', 'Name')->orderBy('Code', 'desc')->first();
        //$countries =  DB::table('city')->select('ID', 'Name')->find(44);
        //$countries =  DB::table('city')->select('ID', 'Name')->where('ID', '<', 44)->get();
        $countries =  DB::table('city')->select('ID', 'Name')->where([
            ['ID', '<', 44],
            ['ID', '>', 5],
        ])->get();
        //$count = DB::table('city')->count(); // Количество записей
        $count = DB::table('city')->select('CountryCode')->distinct()->get(); // Количество записей
        /*$data = DB::table('city')
            ->select('city.ID', 'city.Name as city_name', 'country.Name as country_name')
            ->limit(10)
            ->join('country', 'city.CountryCode', '=',  'country.Code')
            ->orderBy('city.ID')
            ->get();*/
        dd($count);
        //$posts =  DB::select('SELECT * FROM posts WHERE id > :id', ['id' => 2]);
        //DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at IS NULL", [NOW(), NOW()]);
        //return $posts;
        //DB::delete("DELETE FROM world WHERE id = ?", [2]);

        /* Для того что бы выполнились обе транзакции, либо не одной */
/*        DB::beginTransaction();
        try {
            DB::update("UPDATE world SET created_at = ? WHERE created_at IS NULL", [NOW()]);
            DB::update("UPDATE world SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
        */
        return view('home', ['posts' => $posts, 'countries' => $countries]);
    }

}