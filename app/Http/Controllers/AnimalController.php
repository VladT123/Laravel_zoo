<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{
    //
    public function index()
    {
        return view('animals.index', [
            'animals' => Animal::paginate(10)
        ]);
    }

    public function show(Animal $animal)
    {
        return view('animals.show', [
            'animal' => $animal
        ]);
    }

    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'age' => 'required',
            'description' => 'required'
        ]);

        Animal::create($formFields);
        return redirect('/')->with('message', 'animal added');
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect('/')->with('message', 'animal deleted');
    }
}
