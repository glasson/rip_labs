<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;
class ListOfMedicaments extends Controller
{
    public function list() {
        return Medicament::all();
    }
}
