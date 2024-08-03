<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Estate;
use App\Models\User;
use App\Models\UserEstate;
use Illuminate\Http\Request;

class SendContractController extends Controller
{
    public function send(Estate $estate, Contract $contract) {

        $seller = User::find(auth()->id());

        $foundBuyer = UserEstate::whereIn('estate_id', $estate)->pluck('user_id')->first();
        
        $buyer = User::where('id', $foundBuyer)->first();
        
        $seller->sentContracts()->attach($buyer);

        return redirect()->route('index')->with('success', 'Your contract was successfully sent to buyer!');
    }

    public function unsend(Estate $estate) {

        $seller = User::find(auth()->id());

        $foundBuyer = UserEstate::whereIn('estate_id', $estate)->pluck('user_id')->first();
        
        $buyer = User::where('id', $foundBuyer)->first();
        
        $seller->sentContracts()->detach($buyer);

        return redirect()->route('index')->with('success', 'Your contract was successfully sent to buyer!');
    }
}
