<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
  
class UserController extends Controller
{
    public function index()
    {
        $phones = Phone::all();
        return view ('phones.index')->with('phones', $phones);
    }
    
    public function create()
    {
        return view('phones.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Phone::create($input);
        return redirect('phones')->with('flash_message', 'Phone Addedd!');  
    }
    
    public function show($id)
    {
        $phone = Phone::find($id);
        return view('phones.show')->with('phones', $phone);
    }
    
    public function edit($id)
    {
        $phone = Phone::find($id);
        return view('phones.edit')->with('phones', $phone);
    }
  
    public function update(Request $request, $id)
    {
        $phone = Phone::find($id);
        $input = $request->all();
        $phone->update($input);
        return redirect('phones')->with('flash_message', 'phone Updated!');  
    }
  
    public function destroy($id)
    {
        Phone::destroy($id);
        return redirect('phones')->with('flash_message', 'Phone deleted!');  
    }
}


/*public function index(Request $request)
{
    $phone = Phone::find(1);

    $user = User::find(10);
       
    $phone->user()->associate($user)->save();
}*/