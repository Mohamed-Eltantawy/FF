<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Startup;

class StartupController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Startup::orderBy('founded_at', 'DESC','founder')->get();

        return view('startups.index', compact('startup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('startups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Startup::create($request->all());

        return redirect()->route('startups')->with('success', 'Company added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Startup::findOrFail($id);

        return view('startups.show', compact('startup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Startup::findOrFail($id);

        return view('startups.edit', compact('startup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Startup::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('startups')->with('success', 'company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Startup::findOrFail($id);

        $product->delete();

        return redirect()->route('startups')->with('success', 'company deleted successfully');
    }
}








