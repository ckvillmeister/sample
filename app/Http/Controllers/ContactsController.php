<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    function retrieve(Request $requst){
        return view('index', ['conctacts' => Contacts::all()]);
    }
}
