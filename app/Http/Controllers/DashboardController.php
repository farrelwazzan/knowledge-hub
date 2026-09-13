<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $totalKnowledge = $user->knowledgeEntries()->count();

        $addedThisWeek = $user->knowledgeEntries()
            ->where('created_at', '>=', now()->startOfWeek())
            ->count();

        $recentKnowledge = $user->knowledgeEntries()
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalKnowledge',
            'addedThisWeek',
            'recentKnowledge'
        ));
    }
}