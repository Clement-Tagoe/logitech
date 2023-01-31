<?php

namespace App\Http\Controllers;

use App\Models\Freight;
use App\Models\Category;
use Illuminate\Http\Request;

class FreightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('freights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freights.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'file_number' => 'required|min:4',
            'bl_number' => 'required|unique:freights',
            'customer_name' => 'required:min:3',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $formFields['status_id'] = 1;

        Freight::create($formFields);

        session()->flash('success_message', 'Freight job created successfully');

        return redirect()->route('freights.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Freight  $freight
     * @return \Illuminate\Http\Response
     */
    public function show(Freight $freight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Freight  $freight
     * @return \Illuminate\Http\Response
     */
    public function edit(Freight $freight)
    {
        return view('freights.edit', [
            'freight' => $freight,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Freight  $freight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freight $freight)
    {
        $formFields = $request->validate([
            'file_number' => 'required|min:4',
            'bl_number' => 'required',
            'customer_name' => 'required|min:3',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $freight->update($formFields);

        session()->flash('success_message', 'Freight job updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Freight  $freight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freight $freight)
    {
        //
    }
}
