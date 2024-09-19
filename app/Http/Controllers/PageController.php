<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Throwable;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('page.index', compact('pages'));
    }

    public function create()
    {
        return $this->form(new Page);
    }

    protected function form(Page $page)
    {
        $exists = $page->exists;
        return view('page.form', [
            'data' => $page,
            'action' => !$exists ? route('page.store') : route('owner.page.update', $page),
            'method' => !$exists ? 'POST' : 'PUT',
        ]);
    }

    public function store(PageRequest $request)
    {
        try {
            $validated = $request->validated();
            $validated['slug'] = Str::slug($validated['title']);

            Page::create($validated);

            return redirect()->route('page.index')
                    ->with('success', 'Success added!');
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function visit($slug)
    {
        $page = Page::whereSlug($slug)->first();
        $page->increment('visitor');
        return view('page.visit', compact('page'));
    }
}
