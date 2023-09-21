<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;


//models

use App\Models\Type;

//request 
use App\Http\Requests\Type\StoreTypeRequest;
use App\Http\Requests\Type\UpdateTypeRequest;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {

        $formData = $request->validated();

        $type = Type::create([
            'title' => $formData['title'],
            'slug' => str()->slug($formData['title']),
        ]);

        return view('admin.types.show', compact('types'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
    }
}
