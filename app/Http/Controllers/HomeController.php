<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $posts)
    {

       //$posts = $posts->where('user_id', Auth::user()->id)->get();
       $posts = Post::all();
        return view('home', compact('posts'));
    }
    public function update($id)
    {
        $post = Post::find($id);

        //$this->authorize('update-post',$post);
        if(Gate::denies('update-post', $post)){
            abort(403, 'Não autorizado!');
        }

        return view('update-post', compact('post'));
        

    }
}
