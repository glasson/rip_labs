<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class DeleteMedicament extends Controller
{
    public function delete($id){
        $med = Medicament::find(number_format($id));
        $med->delete();
        return Medicament::all();
    }
}
