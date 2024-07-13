<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('put')
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                        src="{{ $user->getImageURL() }}" alt="{{ $user->name }}">
                    <div>
                        <input name="name" value="{{ $user->name }}" type="text" class="form-control">
                        @error('name')
                            <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    @can('update', $user)
                        <a class="text-primary mx-2" href="{{ route('users.show', $user->id) }}">
                            View
                        </a>
                    @endcan 
                </div>
            </div>
            <div class="mt-4">
                <label for="">Profile picture</label>
                <input name="image" class="form-control" type="file">
                @error('image')
                    <span class="text-danger fs-6">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> Bio : </h5>
                    <div class="mb-3">
                        <textarea name="bio" class="form-control" id="bio" rows="3">{{ $user->bio }}</textarea>
                        @error('bio')
                            <span class="d-block mt-2 mb-2 fs-6 text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <button class="btn btn-dark mx-3 mb-3">Save</button>
            </div>
        </form>
    </div>
</div>