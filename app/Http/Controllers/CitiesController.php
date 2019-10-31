<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\State;
use Laracasts\Flash\Flash;
use App\Http\Requests\CitiesRequest;

class CitiesController extends Controller
{
    public function create()
    {
        $states = State::orderBy('id', 'ASC')->pluck('name','id');
        return view('admin.cities.create')
            ->with('states',$states);
    }
   

    public function store(CitiesRequest $request)
    {
        $city = new City($request->all());
        $city->save();

        flash("Se ha registrado ". $city->name ." sastifactoriamente!");
        
        
        return redirect()->route('cities.index');
        
    }

    public function index()
    {
        $cities = City::orderBy('id', 'ASC')->paginate(2);
        $cities->each(function($cities){
            $cities->states;
        });
        
        return view('admin.cities.index')
            ->with('cities',$cities);

    }

    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();

        flash('La Ciudad '.$city->name . ' a sido eliminada!')->error();
        return redirect()->route('cities.index');
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->fill($request->all());
        $city->save(); 

        flash('La ciudad '.$city->name . ' a sido editada con exito!')->important();
        return redirect()->route('cities.index');
      
    }

    public function edit($id)
    {
        $city = City::find($id);
        $states = State::orderBy('id', 'ASC')->pluck('name','id');
            
        return view('admin.cities.edit')
            ->with('city', $city)
            ->with('states',$states);


               
    }
}
