<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reports as Report;

class ReportController extends Controller
{
    public function index(){
        $reports= Report::all(); 
        return view('report.index', compact('reports'));
    }
}
