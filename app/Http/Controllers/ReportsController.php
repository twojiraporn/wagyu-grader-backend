<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index() {
        return view('reports.index');
    }

//    public function show($id) {
//        return view('reports.show');
//    }
}
