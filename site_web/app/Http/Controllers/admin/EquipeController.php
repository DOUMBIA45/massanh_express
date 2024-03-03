<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function equipe(){
        return view('admin.equipe.index');
    }
}
