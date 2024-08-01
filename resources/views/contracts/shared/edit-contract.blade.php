<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form enctype="multipart/form-data" method="POST" action="{{ route('estates.contracts.update', [$estate->id, $contract->id]) }}">
            @csrf
            @method('put')
            <div class="d-flex align-items-center">
                <div>
                    <label for="phone_number">Phone Number</label>
                    <input name="phone_number" type="text" value="{{ $contract->phone_number }}" class="form-control">
                    @error('phone_number')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="seller_name">Seller Name</label>
                    <input name="seller_name" value="{{ $contract->seller_name }}" type="text" class="form-control">
                    @error('seller_name')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="buyer_name">Buyer Name</label>
                    <input name="buyer_name" value="{{ $contract->buyer_name }}" type="text" class="form-control">
                    @error('buyer_name')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="seller_id_number">Seller ID Number</label>
                    <input name="seller_id_number" value="{{ $contract->seller_id_number }}" type="text" class="form-control">
                    @error('seller_id_number')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="buyer_id_number">Buyer ID Number</label>
                    <input name="buyer_id_number" value="{{ $contract->buyer_id_number }}" type="text" class="form-control">
                    @error('buyer_id_number')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="seller_address">Seller Address</label>
                    <input name="seller_address" value="{{ $contract->seller_address }}" type="text" class="form-control">
                    @error('seller_address')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="buyer_address">Buyer Address</label>
                    <input name="buyer_address" value="{{ $contract->buyer_address }}" type="text" class="form-control">
                    @error('buyer_address')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> Description : </h5>
                    <div class="mb-3">
                        <textarea name="description" class="form-control" id="description" rows="3">{{ $contract->description }}</textarea>
                        @error('description')
                            <span class="d-block mt-2 mb-2 fs-6 text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark mx-3 mb-3">Update</button>
            </div>
        </form>
    </div>
</div>