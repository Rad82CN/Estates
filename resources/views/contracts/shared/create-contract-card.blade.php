<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form enctype="multipart/form-data" method="POST" action="{{ route('contracts.store') }}">
            @csrf
            <div class="d-flex align-items-center">
                <div>
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control">
                    @error('name')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="id_number">ID Number</label>
                    <input name="id_number" type="text" class="form-control">
                    @error('id_number')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="seller_address">Seller Address</label>
                    <input name="seller_address" type="text" class="form-control">
                    @error('seller_address')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="buyer_address">Buyer Address</label>
                    <input name="buyer_address" type="text" class="form-control">
                    @error('buyer_address')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> Description : </h5>
                    <div class="mb-3">
                        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                        @error('description')
                            <span class="d-block mt-2 mb-2 fs-6 text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark mx-3 mb-3">Share</button>
            </div>
        </form>
    </div>
</div>