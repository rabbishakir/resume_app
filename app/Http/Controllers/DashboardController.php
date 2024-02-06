<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total = Applicant::count();

        return view('dashboard', compact('total'));
    }
}
