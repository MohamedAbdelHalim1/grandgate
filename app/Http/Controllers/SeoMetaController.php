<?php

namespace App\Http\Controllers;

use App\Models\SeoMeta;
use Illuminate\Http\Request;

class SeoMetaController extends Controller
{
    public function index()
    {
        $seoMetas = SeoMeta::all();
        return view('backend.seo.index', compact('seoMetas'));
    }

    public function edit($id)
    {
        $seoMeta = SeoMeta::findOrFail($id);
        return view('backend.seo.edit', compact('seoMeta'));
    }

    public function update(Request $request, $id)
    {
        $seoMeta = SeoMeta::findOrFail($id);
        $seoMeta->update($request->only('title', 'description'));
        return redirect()->route('seo.index')->with('success', 'SEO Meta updated successfully.');
    }
}
