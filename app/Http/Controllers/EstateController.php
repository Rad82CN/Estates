<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstateRequest;
use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    public function show() {
        //
    }

    public function create() {
        return view('estates.create-estate');
    }

    public function store(StoreEstateRequest $request) {
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();

        Estate::create($validated);

        return redirect()->route('index')->with('success', 'Your Estate was successfully posted!');
    }

    public function destroy() {
        //
    }

    public function edit() {
        //
    }

    public function update() {
        //
    }
}
