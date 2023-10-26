<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class UpdateMedicament extends Controller
{
    public function update(Request $r, $id){
        $name = $r->input("name");
        $desc = $r -> input('desc');
        $m = Medicament::find(number_format($id));
        if (!$m) {
            return response()->json(['message' => 'Запись не найдена']);
        }
        $m->update($r->all());

        return response()->json(["all_data"=>Medicament::all(), 'message' => 'Запись успешно обновлена']);
    }
}
