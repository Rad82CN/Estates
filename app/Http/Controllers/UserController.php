<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show(User $user) {
        return view('users.show' , compact('user'));
    }

    public function edit(User $user) {
        $this->authorize('update', $user);
        
        return view('users.edit' , compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user) {
        $this->authorize('update', $user);
        
        $validated = $request->validated();

        if($request->has('image')) {
            $imagePath = $request->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            Storage::disk('public')->delete($user->image ?? '');
        }

        $user->update($validated);

        return redirect()->route('users.show', $user->id)->with('success', 'Account Updated successfully!');
    }

    public function profile() {
        return $this->show(auth()->user());
    }
}
