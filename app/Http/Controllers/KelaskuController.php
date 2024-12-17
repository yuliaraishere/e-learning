<?php

namespace App\Http\Controllers;

use App\Models\Kelasku;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class KelaskuController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Kelasku::all();
        return view('dashboard.master.kelasku.index', compact('data'));
    }
    public function hardskill()   
    {
        $data = Kelasku::all();
        return view('dashboard.master.kelasku.hard', compact('data'));
    }
}
