<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <h4><a href="{{ route('users.show', $contract->user_id) }}">
                    {{$contract->seller_name}}</a></h4>
            </div>
            <div class="d-flex">
                @can('destroy', $contract)
                    <a class="text-primary mx-2" href="{{ route('estates.contracts.edit', [$contract->estate_id, $contract->id]) }}">
                        Edit
                    </a>
                    <form method="post" action="{{ route('estates.contracts.destroy', [$contract->estate_id, $contract->id]) }}">
                        @csrf
                        @method('delete')   
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                @endcan
            </div>
        </div>
        <hr>
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