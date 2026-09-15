<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeEntry;
use Illuminate\Http\Request;

class KnowledgeEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $knowledgeEntries = $request->user()
            ->knowledgeEntries()
            ->latest()
            ->get();

        return view('knowledge.index', compact('knowledgeEntries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('knowledge.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
                'source_url' => ['nullable', 'url'],
                'notes' => ['nullable', 'string'],
            ],
            [
                'title.required' => 'Please enter a title.',
                'source_url.url' => 'Please enter a valid URL.',
            ]
        );
        $knowledge = $request->user()->knowledgeEntries()->create($validated);
        return redirect()
            ->route('knowledge.show', [
                'knowledgeEntry' => $knowledge,
                'from' => $request->input('from', 'dashboard'),
            ])
            ->with('success', 'Knowledge added successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request, KnowledgeEntry $knowledgeEntry)
    {
        abort_unless(
            $knowledgeEntry->user_id === $request->user()->id,
            403
        );
        return view('knowledge.show', compact('knowledgeEntry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, KnowledgeEntry $knowledgeEntry) {
        abort_unless(
            $knowledgeEntry->user_id === $request->user()->id,
            403
        );
        return view('knowledge.edit', compact('knowledgeEntry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KnowledgeEntry $knowledgeEntry)
    {
        $validated = $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
                'source_url' => ['nullable', 'url'],
                'notes' => ['nullable', 'string'],
            ],
            [
                'title.required' => 'Please enter a title.',
                'source_url.url' => 'Please enter a valid URL.',
            ]
        );

        $knowledgeEntry->update($validated);

        $from = $request->input('from', 'dashboard');

        if ($from === 'library') {
            return redirect()
                ->route('knowledge.index')
                ->with('success', 'Knowledge updated successfully.');
        }

        if ($from === 'detail') {
            return redirect()
                ->route('knowledge.show', $knowledgeEntry)
                ->with('success', 'Knowledge updated successfully.');
        }

        return redirect()
            ->route('dashboard')
            ->with('success', 'Knowledge updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request, KnowledgeEntry $knowledgeEntry) {
        abort_unless(
            $knowledgeEntry->user_id === $request->user()->id,
            403
        );

        $knowledgeEntry->delete();

        if ($request->input('from') === 'dashboard') {
            return redirect()
                ->route('dashboard')
                ->with('success', 'Knowledge deleted successfully.');
        }

        return redirect()
            ->route('knowledge.index')
            ->with('success', 'Knowledge deleted successfully.');
    }
}
