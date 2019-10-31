<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category($request->all());
        $category->save();

        flash("Se ha registrado ". $category->name ." sastifactoriamente!");
        
        
        return redirect()->route('categories.index');
        
    }

    public function index()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(2);
        
        return view('admin.categories.index')->with('categories',$categories);

    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        flash('La categoria '.$category->name . ' a sido eliminada!')->error();
        return redirect()->route('categories.index');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save(); 

        flash('La Categoria '.$category->name . ' a sido editada con exito!')->important();
        return redirect()->route('categories.index');
      
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
        
    }
}
