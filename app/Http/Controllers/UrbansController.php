<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urban;
use App\City;
use App\Property;
use Laracasts\Flash\Flash;
use App\Http\Requests\UrbansRequest;

class UrbansController extends Controller
{
    public function create()
    {
        $urbans = Urban::orderBy('id', 'ASC')->pluck('name','id');
        return view('admin.urbans.create')
            ->with('urbans',$urbans);
    }
   

    public function store(UrbansRequest $request)
    {
        $urban = new Urban($request->all());
        $urban->save();

        flash("Se ha registrado ". $urban->name ." sastifactoriamente!");
        
        
        return redirect()->route('urbans.index');
        
    }

    public function index()
    {
        
        $urbans = Urban::orderBy('id', 'ASC')->paginate(2);
        //dd($urbans);
        $urbans->each(function($urbans){
            $urbans->cities;
            $urbans->properties;
        });
        
        return view('admin.urbans.index')
            ->with('urbans',$urbans);

    }

    public function destroy($id)
    {
        $urban = City::find($id);
        $urban->delete();

        flash('La Urbanización '.$urban->name . ' a sido eliminada!')->error();
        return redirect()->route('urbans.index');
    }

    public function update(Request $request, $id)
    {
        $urban = Urban::find($id);
        $urban->fill($request->all());
        $urban->save(); 

        flash('La Urbanización '.$urban->name . ' a sido editada con exito!')->important();
        return redirect()->route('cities.index');
      
    }

    public function edit($id)
    {
        $urban = Urban::find($id);
        $cities = City::orderBy('id', 'ASC')->pluck('name','id');
            
        return view('admin.urbans.edit')
            ->with('urban', $urban)
            ->with('cities',$cities);
    }
}
