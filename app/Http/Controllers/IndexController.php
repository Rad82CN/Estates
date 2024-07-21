<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        
        $estates = Estate::orderBy('created_at', 'DESC');
        $user = new User;

        if(request()->has('search')) {
            $estates = $estates->where('description', 'like', '%' . request()->get('search','') . '%');
        }
        
        return view('index', [
            'estates' => $estates->paginate(6),
            'user' => $user
        ]);
    }
}
