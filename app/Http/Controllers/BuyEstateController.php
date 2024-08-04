<?php

namespace App\Http\Controllers;

use App\Models\Contract;
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

        $contracts = Contract::all()->pluck('estate_id');
        
        if($contracts->contains($estate->id)) {
            return view('estates.error');
        } else {
            $user = User::find(auth()->id());
        
            $user->boughtEstates()->detach($estate);
    
            return redirect()->route('index')->with('success', 'Your request was canceled!');
        }
    }

    public function sent_requests(User $user) {
        $this->authorize('update', $user);

        $bought = $user->boughtEstates()->pluck('estate_id');

        $estates = Estate::whereIn('id', $bought);

        return view('index', [
            'estates' => $estates->paginate(5),
            'user' => $user
        ]);
    }
}
