<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['customer']);
    }
    
    
    public function index()
    {
        return view('dashboard');
    }
}
