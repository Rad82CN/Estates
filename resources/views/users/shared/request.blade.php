<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
                <img style="width:200px" class="me-2"
                    src="{{ $request->getImageURL() }}" alt="Estate">
            <div>
                <h4 class="text-success">Requested</h4>
            </div>
        </div>
        <p class="fs-5 mt-4">
            {{ $request->description }}
        </p>
        <hr>
        <div>
            <span class="fs-6 me-1">Address: {{$request->address}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Dimensions: {{$request->dimensions}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Floor: {{$request->floor}}</span>
        </div>
        <div class="d-flex justify-content-between">
            <div class="mt-2">
                <span class="fs-4 text-success me-1">Price: {{$request->price}} $</span>
            </div>
            <a href="{{ route('contracts.create') }}"><button class="btn-success">
                Make a contract</button></a>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $request->created_at->diffForHumans() }} </span>
            </div>
        </div>
    </div>
</div>