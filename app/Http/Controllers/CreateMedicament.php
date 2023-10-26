<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class CreateMedicament extends Controller
{
    public function create(Request $request){
        $m = new Medicament();
        $data = $request->only(['name','description']);
        $name= $data['name']; 
        $desc=$data['description'];
        $m->name = $name;
        $m->description = $desc;
        $m->save();

        return Medicament::all();
    }
}
