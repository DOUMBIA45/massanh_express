<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function contact(){
        $contacts = Contact::orderByDesc('id')->get();
        return view('admin.contact',['contacts'=>$contacts]);
    }
}
