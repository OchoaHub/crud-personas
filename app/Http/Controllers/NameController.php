<?php

namespace App\Http\Controllers;
use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        $names = Name::orderBy('id', 'desc')->paginate(5);
        return view('names.index', compact('names'));
    }

    public function create()
    {
        return view('names.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'primernombre' => 'required',
            'apellidopaterno' => 'required',
            'apellidomaterno' => 'required',
        ]);

        Name::create($request->post());

        return redirect()->route('names.index')->with('success', 'User has been created succesfully!');
    }

    public function show(Name $name)
    {
        return view('names.show', compact('name'));
    }

    public function edit(Name $name)
    {
        return view('names.edit', compact('name'));
    }

    public function update(Request $request, Name $name)
    {
        $request->validate([
            'primernombre' => 'required',
            'apellidopaterno' => 'required',
            'apellidomaterno' => 'required',
        ]);

        $name->fill($request->post())->save();

        return redirect()->route('names.index')->with('success', 'User has been updated succesfully!');
    }

    public function destroy(Name $name)
    {
        $name->delete();
        return redirect()->route('names.index')->with('success', 'User has been deleted succesfully!');
    }
}
