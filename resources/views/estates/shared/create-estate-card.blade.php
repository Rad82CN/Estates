<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form enctype="multipart/form-data" method="POST" action="{{ route('estates.store') }}">
            @csrf
            <div class="d-flex align-items-center">
                <div>
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control">
                    @error('address')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="dimensions">Dimensions</label>
                    <input name="dimensions" type="text" class="form-control">
                    @error('dimensions')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="floor">Floor</label>
                    <input name="floor" type="text" class="form-control">
                    @error('floor')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <label for="price">Price</label>
                    <input name="price" type="text" class="form-control">
                    @error('price')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-4">
                <label for="">Picture</label>
                <input name="image" class="form-control" type="file">
                @error('image')
                    <span class="text-danger fs-6">{{ $message }}</span>
                @enderror
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