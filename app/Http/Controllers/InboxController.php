<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\User;
use App\Models\UserEstate;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function inbox(User $user) {
        $this->authorize('update', $user);
        
        $estates = $user->estates();

        $contracts = $user->contracts()->pluck('estate_id');

        $notSold = $estates->whereNotIn('id', $contracts)->pluck('id');

        $found = UserEstate::whereIn('estate_id', $notSold)->pluck('estate_id');
        
        $requests = Estate::whereIn('id', $found)->paginate(5);

        return view('users.inbox', compact('user', 'requests'));
    }
}

//where('estate_id', $estate->id)->exists();

//$requests = Estate::whereIn('id', $found)->paginate(5);
