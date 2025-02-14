<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                    src="{{ $user->getImageURL() }}" alt="{{ $user->name }}">
                <div>
                    <h3 class="card-title mb-0"><a href="#"> {{ $user->name }}
                        </a></h3>
                    <span class="fs-6 text-muted">{{'@' . $user->name}}</span>
                </div>
            </div>
            <div>
                @can('update', $user)
                    <a class="text-primary mx-2" href="{{ route('users.edit', $user->id) }}">
                        Edit
                    </a>
                @endcan
            </div>
        </div>
        <div class="px-2 mt-4">
            <h5 class="fs-5"> Bio : </h5>
                <p class="fs-6 fw-light">
                    {{ $user->bio }}
                </p>
                <hr>
                @include('users.shared.user-stats')
        </div>
    </div>
</div>