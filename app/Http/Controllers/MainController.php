<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phonebook;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = Phonebook::all();
        $users = Phonebook::orderBy('name')->paginate(10);
        return view('home', compact('users'));
    }
}
