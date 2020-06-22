<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user){
        $this->user = $user;
    }
    
    public function index(){
        $users = $this->user->all();
        return view('Painel.users.index', compact('users'));
    }
    public function roles($id)
    {
        
        $id = intval($id);
        
        $user = $this->user->find($id);

        $roles = $user->roles()->get();

        return view('Painel.users.roles', compact('user', 'roles'));

    }
}
