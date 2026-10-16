<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomPage;
use Illuminate\Support\Str;

class CustomPageController extends Controller
{
    // Admin me saare pages dikhana
    public function index()
    {
        $pages = CustomPage::latest()->get();
        return view('admin.custom-pages.index', compact('pages'));
    }

    // Create form dikhana
    public function create()
    {
        return view('admin.custom-pages.create');
    }

    // Naya page save karna - Yaha se input hoga
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        CustomPage::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . time(),
            'content' => $request->content
        ]);

        return redirect()->route('admin.custom-pages.index')->with('success', 'Page Created Successfully!');
    }

    // Edit form
    public function edit($id)
    {
        $page = CustomPage::findOrFail($id);
        return view('admin.custom-pages.edit', compact('page'));
    }

    // Update - Admin panel se change hoga
    public function update(Request $request, $id)
    {
        $page = CustomPage::findOrFail($id);
        $page->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('admin.custom-pages.index')->with('success', 'Page Updated!');
    }

    // Delete
    public function destroy($id)
    {
        CustomPage::findOrFail($id)->delete();
        return back()->with('success', 'Page Deleted!');
    }

    // Frontend pe page dikhana
    public function show($slug)
    {
        $page = CustomPage::where('slug', $slug)->firstOrFail();
        return view('frontend.custom-page', compact('page'));
    }
}