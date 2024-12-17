<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Sertifikat::all();
        return view('dashboard.master.sertifikat.index', compact('data'));
    }
   
}
