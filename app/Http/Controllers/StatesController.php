<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use Laracasts\Flash\Flash;
use App\Http\Requests\StatesRequest;

class StatesController extends Controller
{
    public function create()
    {
        return view('admin.states.create');
    }

    public function store(StatesRequest $request)
    {
        $state = new State($request->all());
        $state->save();

        flash("Se ha registrado ". $state->name ." sastifactoriamente!");
        
        
        return redirect()->route('states.index');
        
    }

    public function index()
    {
        $states = State::orderBy('id', 'ASC')->paginate(2);
        
        return view('admin.states.index')->with('states',$states);

    }

    public function destroy($id)
    {
        $state = State::find($id);
        $state->delete();

        flash('La Norma '.$state->name . ' a sido eliminada!')->error();
        return redirect()->route('states.index');
    }

    public function update(Request $request, $id)
    {
        $state = State::find($id);
        $state->fill($request->all());
        $state->save(); 

        flash('El estado '.$state->name . ' a sido editada con exito!')->important();
        return redirect()->route('states.index');
      
    }

    public function edit($id)
    {
        $state = State::find($id);
        return view('admin.states.edit')->with('state', $state);

               
    }
}
