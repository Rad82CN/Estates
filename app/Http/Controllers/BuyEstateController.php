<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;

class BuyEstateController extends Controller
{
    public function submit(Estate $estate) {

        $user = User::find(auth()->id());
        
        $user->boughtEstates()->attach($estate);

        return redirect()->route('index')->with('success', 'Your request was successfully sent to seller!');
    }

    public function cancel(Estate $estate) {

        $user = User::find(auth()->id());
        
        $user->boughtEstates()->detach($estate);

        return redirect()->route('index')->with('success', 'Your request was canceled!');
    }
}
