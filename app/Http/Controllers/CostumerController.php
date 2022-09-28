<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index()
    {
        return "waw";
    }
    public function list()
    {
        $costumer = Costumer::all();
        return view("costumer.index",compact(['costumer']));
    }
    public function create()
    {
        return view('costumer.create');
    }
    public function store(Request $request)
    {
        // dd($request->except(['$_token','submit']));
        Costumer::create($request->except(['$_token','submit']));
        return redirect('/costumer');

    }
    public function edit($id)
    {
        $costumer = Costumer::find($id);
        return view('costumer.edit', compact(['costumer']));
    }
    public function update($id,Request $request)   
    {
        $costumer = Costumer::find($id);
        $costumer->update($request->except(['$_token','submit']));
        return redirect('/costumer');
    }
    public function destroy($id)
    {
        $costumer = Costumer::find($id);
        $costumer->delete();
        return redirect('/costumer');
    }
}
