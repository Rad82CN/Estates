<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        
        $allEstates = Estate::orderBy('created_at', 'desc');
        $contracts = Contract::all()->pluck('estate_id');
        $user = new User;

        $estates = $allEstates->whereNotIn('id', $contracts);

        if(request()->has('search')) {
            $estates = $estates->where('description', 'like', '%' . request()->get('search','') . '%');
        }
        
        return view('index', [
            'estates' => $estates->paginate(6),
            'user' => $user
        ]);
    }
}
