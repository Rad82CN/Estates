<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        
        $estates = Estate::orderBy('created_at', 'DESC')->get();
        $user = new User;
        
        return view('index', [
            'estate' => $estates,
            'user' => $user
        ]);
    }
}
