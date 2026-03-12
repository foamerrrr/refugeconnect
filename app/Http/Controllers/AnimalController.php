<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function create()
    {
        if (! Animal::where('name', 'Coquillette')->exists()) {
            Animal::create([
                'name' => 'Coquillette',
                'species' => 'Chien',
                'age' => 3,
                'description' => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
                'photo' => 'images/animaux/coquillette.png',
            ]);
        }

        return redirect()->route('home');
    }

    public function show(int $id)
    {
        $animal = Animal::findOrFail($id);

        return view('animals.show', [
            'animal' => $animal,
        ]);
    }

    public function edit(int $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->name = $animal->name . ' modifié';
        $animal->save();

        return redirect()->route('home');
    }

    public function delete(int $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('home');
    }
}

