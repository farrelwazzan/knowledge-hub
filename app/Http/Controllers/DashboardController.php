<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $knowledgeEntries = $request->user()
            ->knowledgeEntries()
            ->latest()
            ->get();

        return view('dashboard', compact('knowledgeEntries'));
    }
}