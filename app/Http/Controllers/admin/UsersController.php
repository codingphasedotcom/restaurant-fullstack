<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('admin/users/all');
    }
    public function create(){
        $roles = Role::All();
        return view('admin/users/create', [
            'roles' => $roles
        ]);
    }
    public function store(){
        // return request()->all();
        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->attach(request('role_id'));

       
        return redirect('/admin/users');
    }
    public function edit(){
        return view('admin/users/edit');
    }
}
