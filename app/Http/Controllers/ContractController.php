<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContractRequest;
use App\Http\Requests\UpdateContractRequest;
use App\Models\Contract;
use App\Models\Estate;
use App\Models\User;
use App\Models\UserContract;
use App\Models\UserEstate;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function all_sent(User $user) {
        $this->authorize('update', $user);
        
        $contracts = $user->contracts()->paginate(5);

        return view('contracts.show-all', compact('user', 'contracts'));
    }

    public function all_recieved(User $user) {
        
    }
    
    public function show(Estate $estate, Contract $contract) {
        $this->authorize('destroy', $contract);

        $foundBuyer = UserEstate::whereIn('estate_id', $estate)->pluck('user_id')->first();
        
        $user = User::where('id', $foundBuyer)->first();
        
        return view('contracts.show', compact('estate', 'contract', 'user'));
    }

    public function create(Estate $estate) {
        return view('contracts.create', compact('estate'));
    }

    public function store(StoreContractRequest $request, Estate $estate) {
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();
        $validated['estate_id'] = $estate->id;

        Contract::create($validated);

        $user = User::find(auth()->id());
        
        $contract = $user->contracts()->first();

        return redirect()->route('estates.contracts.show', [$estate->id, $contract->id])->with('success', 'Your contract was successfully created!');
    }

    public function edit(Estate $estate, Contract $contract) {
        $this->authorize('destroy', $contract);
        
        return view('contracts.edit', compact('estate', 'contract'));
    }

    public function update(UpdateContractRequest $request, Estate $estate, Contract $contract) {
        $this->authorize('destroy', $contract);

        $validated = $request->validated();

        $contract->update($validated);

        return redirect()->route('estates.contracts.show', [$estate->id, $contract->id])->with('success', 'The Contract was successfully updated!');

    }

    public function destroy(Estate $estate, Contract $contract) {
        $this->authorize('destroy', $contract);

        $contract->delete();

        return redirect()->route('index')->with('success', 'The Contract was successfully deleted!');
    }
}