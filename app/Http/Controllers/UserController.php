<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = response()->json(User::all());
        return $users;
    }
    public function show($id)
    {
        $user = response()->json(User::find($id));
        return $user;
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/user/list'); //átírányít a törlés után vissza a listázó oldalra
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/user/list'); //átírányít a hozzáadás után vissza a listázó oldalra
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/user/list'); //átírányít a módosítás után vissza a listázó oldalra
    }

    //views
    public function newView()
    {
        //új rekord rögzítése
        $users = User::all();
        return view('user.new', ['users' => $users]);
    }
    public function editView($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }
    public function listView()
    {
        $users = User::all();
        return view('user.list', ['users' => $users]);
    }
}
