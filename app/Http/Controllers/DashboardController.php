<?php

namespace App\Http\Controllers;
use App\Models\Form\FormStatistic;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index() 
    {
        return view('dashboard');
    }
}
