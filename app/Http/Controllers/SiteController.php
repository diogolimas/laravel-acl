<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;
use Gate;

class SiteController extends Controller
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
       //$posts = Post::all();
        return view('Portal.home.index');
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
    public function rolesPermissions(){
        $nameUser = auth()->user()->name;
        var_dump("<h1> {$nameUser} </h1>");
        echo "<br>";

        foreach (auth()->user()->roles as  $role) {
            echo $role->name."=>";
            echo "<br>";
            $permissions = $role->permissions;
            foreach ($permissions as $permission) {
                echo $permission->name;
                echo "<br>";
            }
        }
    }
}
