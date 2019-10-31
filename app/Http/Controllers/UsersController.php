<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        flash("Se ha registrado ". $user->name ." sastifactoriamente!");

        
        
        return redirect()->route('users.index');
        
    }

    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(2);
        return view('admin.users.index')->with('users',$users);

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        flash('El ususario '.$user->name . ' a sido eliminado!')->error();
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save(); 

        flash('El ususario '.$user->name . ' a sido editado con exito!')->important();
        return redirect()->route('users.index');
      
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
        
    }

    
}
