<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePost;

class PostsController extends Controller
{

    function index(){
        $all_posts = \DB::table('posts')->get();
        return view('index',['posts'=>$all_posts]);
    }

    function show($postSlug)
    {
        //Get data from database
        $firstPost =  \DB::table('posts')
            ->where('url', $postSlug)
            ->first();

        if (!$firstPost) {
            abort(404);
        }

        return view('post', compact('firstPost'));
    }

    function create()
    {
        return view('create');
    }

    function store(StorePost $request)
    {        
        $request_data = $request->all();
        unset($request_data['_token']);

        $result =  \DB::table('posts')
            ->insert(
                $request_data
            );

        if ($result) {
            return redirect('/posts');
        } else {
            return "Unexcepted error occur";
        }
    }
}
