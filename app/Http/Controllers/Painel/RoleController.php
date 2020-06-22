<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    private $role;
    public function __construct(Role $role){
        $this->role = $role;
    }
    
    public function index(){
        if(Gate::denies('adm')){
            return redirect()->back();
        }
        $roles = $this->role->all();
        return view('Painel.roles.index', compact('roles'));
    }
    public function permissions($id)
    {
        if(Gate::denies('adm')){
            return redirect()->back();
        }
        $id = intval($id);
        
        $role = $this->role->find($id);

        $permissions = $role->permissions()->get();

        return view('Painel.roles.permissions', compact('role', 'permissions'));

    }
}
