<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
    private $role;
    public function __construct(Role $role){
        $this->role = $role;
    }
    
    public function index(){
        $roles = $this->role->all();
        return view('Painel.roles.index', compact('roles'));
    }
    public function permissions($id)
    {
        
        $id = intval($id);
        
        $role = $this->role->find($id);

        $permissions = $role->permissions()->get();

        return view('Painel.roles.permissions', compact('role', 'permissions'));

    }
}
