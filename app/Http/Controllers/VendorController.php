<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class VendorController extends Controller
{
    public function dashboard(): View
    {
        return view('vendor.dashboard');
    }
}
