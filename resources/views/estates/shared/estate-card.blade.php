<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="{{ $estate->user->getImageURL() }}" alt="{{ $estate->user->name }}">
                <div>
                    <h5 class="card-title mb-0"><a href="{{ route('users.show', $estate->user->id) }}"> {{ $estate->user->name }}
                        </a></h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card-body">
        <img style="width:200px" class="me-2"
            src="{{ $estate->getImageURL() }}" alt="Estate">
        <p class="fs-5 mt-4">
            {{ $estate->description }}
        </p>
        <div>
            <span class="fs-6 me-1">Address: {{$estate->address}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Dimensions: {{$estate->dimensions}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Floor: {{$estate->floor}}</span>
        </div>
        <div class="d-flex justify-content-between">
            <div class="mt-2">
                <span class="fs-4 text-success me-1">Price: {{$estate->price}} $</span>
            </div>
            <a href="{{ route('estates.show', $estate->id) }}"><button class="btn-success">
                View</button></a>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $estate->created_at->diffForHumans() }} </span>
            </div>
        </div>
        <div>
        <hr>
        </div>
    </div>
</div>