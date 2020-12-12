<?php


namespace App\Http\Controllers;


use App\City;
use App\Country;
use App\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
//        $data = Country::all();
//        $data = Country::query()->limit(5)->get();
//        $data = Country::where('Code', '<', 'ALB')->select('Code', 'Name')->offset(1)->limit(2)->get();
//        $data = City::find(5);
//        $data = Country::find('AGO2');
//        dd($data);

        /*$post = new Post();
        $post->title = 'Post 4';
        $post->content = 'Lorem ipsum 4';
        $post->save();*/

//        Post::create(['title' => 'Post 7', 'content' => 'Lorem ipsum 7']);
        /*$post = new Post();
        $post->fill(['title' => 'Post 8', 'content' => 'Lorem ipsum 8']);
        $post->save();*/

        /*$post = Post::find(6);
        $post->content = 'Lorem ipsum 6';
        $post->save();*/

//        Post::where('id', '>', 3)
//            ->update(['updated_at' => NOW()]);

//        $post = Post::find(7);
//        $post->delete();

        Post::destroy(4, 5);

        return view('home', ['res' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }

}