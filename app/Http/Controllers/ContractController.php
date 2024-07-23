<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function show(Contract $contract) {
        return view('contracts.show', compact('contract'));
    }

    public function create() {
        // 
    }

    public function store() {
        // 
    }

    public function destroy() {
        // 
    }
}
