<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContractRequest;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function show(Contract $contract) {
        return view('contracts.show', compact('contract'));
    }

    public function create() {
        return view('contracts.create');
    }

    public function store(StoreContractRequest $request) {
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();

        Contract::create($validated);

        return redirect()->route('index')->with('success', 'Your contract was successfully created!');
    }

    public function destroy() {
        // 
    }
}
