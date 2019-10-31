<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use Laracasts\Flash\Flash;
use App\Http\Requests\RulesRequest;

class RulesController extends Controller
{
    public function create()
    {
        return view('admin.rules.create');
    }

    public function store(RulesRequest $request)
    {
        $rule = new Rule($request->all());
        $rule->save();

        flash("Se ha registrado ". $rule->title ." sastifactoriamente!");
        
        
        return redirect()->route('rules.index');
        
    }

    public function index()
    {
        $rules = Rule::orderBy('id', 'ASC')->paginate(2);
        
        return view('admin.rules.index')->with('rules',$rules);

    }

    public function destroy($id)
    {
        $rule = Rule::find($id);
        $rule->delete();

        flash('La Norma '.$rule->title . ' a sido eliminada!')->error();
        return redirect()->route('rules.index');
    }

    public function update(Request $request, $id)
    {
        $rule = Rule::find($id);
        $rule->fill($request->all());
        $rule->save(); 

        flash('La Norma '.$rule->title . ' a sido editada con exito!')->important();
        return redirect()->route('rules.index');
      
    }

    public function edit($id)
    {
        $rule = Rule::find($id);
        return view('admin.rules.edit')->with('rule', $rule);
        
    }
}
