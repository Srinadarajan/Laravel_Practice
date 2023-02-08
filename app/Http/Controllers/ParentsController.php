<?php

namespace App\Http\Controllers;
use App\Models\Parents;
use Illuminate\Http\Request;

class parentsController extends Controller
{
    public function index()
    {
        $parents = parents::all();
        return view ('parents.index')->with('parents', $parents);
    }
    
    public function create()
    {
        return view('parents.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        parents::create($input);
        return redirect('parents')->with('flash_message', 'parents Addedd!');  
    }
    
    public function show($id)
    {
        $parents = parents::find($id);
        return view('parents.show')->with('parents', $parents);
    }
    
    public function edit($id)
    {
        $parents = parents::find($id);
        return view('parents.edit')->with('parents', $parents);
    }
  
    public function update(Request $request, $id)
    {
        $parents = parents::find($id);
        $input = $request->all();
        $parents->update($input);
        return redirect('parents')->with('flash_message', 'parents Updated!');  
    }
  
    public function destroy($id)
    {
        parents::destroy($id);
        return redirect('parents')->with('flash_message', 'parents deleted!');  
    }
}
