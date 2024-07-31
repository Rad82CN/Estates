<div class="card">
    <div class="card-body">
        <div>
            <span class="fs-6 me-1">Seller Name: {{$contract->seller_name}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Buyer Name: {{$contract->buyer_name}}</span>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('estates.contracts.show', [$contract->estate_id, $contract->id]) }}"><button class="btn-success">
                View</button></a>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $contract->created_at->diffForHumans() }} </span>
            </div>
        </div>
    </div>
</div>