<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EPrescriptionController extends Controller
{
    public function form(): View {
        return view('form');
    }
}
