<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', compact('planet'));
    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(Request $request)
    {
        $planet = new Planet;

        $planet->ja_name = $request->ja_name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }

    public function edit($id)
    {
        $planet = Planet::find($id);

        return view('planets.edit',compact('planet'));
    }

    public function update(Request $request, $id)
    {
        $planet = Planet::find($id);

        $planet->ja_name = $request->ja_name;
        $planet->en_name = $request->en_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
