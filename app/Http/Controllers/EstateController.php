<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstateRequest;
use App\Http\Requests\UpdateEstateRequest;
use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstateController extends Controller
{
    public function show(Estate $estate) {
        $user = new User;
        
        return view('estates.show', compact(['estate', 'user']));
    }

    public function create() {
        return view('estates.create-estate');
    }

    public function store(StoreEstateRequest $request) {
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();

        $imagePath = $request->file('image')->store('estates', 'public');
        $validated['image'] = $imagePath;

        Estate::create($validated);

        return redirect()->route('index')->with('success', 'Your Estate was successfully posted!');
    }

    public function destroy(Estate $estate) {
        $this->authorize('destroy', $estate);

        $estate->delete();

        return redirect()->route('index')->with('success', 'The Estate was successfully deleted!');
    }

    public function edit(Estate $estate) {
        $this->authorize('update', $estate);

        return view('estates.edit', compact('estate'));
    }

    public function update(UpdateEstateRequest $request, Estate $estate) {
        $this->authorize('update', $estate);
        
        $validated = $request->validated();

        if($request->has('image')) {
            $imagePath = $request->file('image')->store('estates', 'public');
            $validated['image'] = $imagePath;

            Storage::disk('public')->delete($estate->image ?? '');
        }

        $estate->update($validated);

        return redirect()->route('estates.show', $estate->id)->with('success', 'The Estate was successfully updated!');
    }
}
