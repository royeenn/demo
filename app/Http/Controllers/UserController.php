<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', ['users' => $users]);
    }
    public function create()
    {
        return view('adduser');
    }
    public function store(Request $req)
    {
        $data = [
            'commonname' => $req->commonname,
            'email' => $req->email,
            'nickname' => $req->name,
            'password' => $req->pw,
        ];
        User::create($data);
        return redirect('user');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }
    public function update($id, Request $req)
    {
        $data = [
            'commonname' => $req->commonname,
            'email' => $req->email,
            'nickname' => $req->name,
            'password' => $req->pw,
        ];
        User::where('iduser', $id)->update($data);
        return redirect('user');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('user');
    }
}
