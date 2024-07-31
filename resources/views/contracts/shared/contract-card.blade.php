<div class="card">
    <div class="card-body">
        <div>
            <span class="fs-6 me-1">Phone Number: {{$contract->phone_number}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Seller Name: {{$contract->seller_name}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Buyer Name: {{$contract->buyer_name}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Seller Id Number: {{$contract->seller_id_number}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Buyer Id Number: {{$contract->buyer_id_number}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Seller Address: {{$contract->seller_address}}</span>
        </div>
        <div>
            <span class="fs-6 me-1">Buyer Address: {{$contract->buyer_address}}</span>
        </div>
        <hr>
        <p class="fs-5 mt-4">
            {{ $contract->description }}
        </p>
        <hr>
        <div class="d-flex justify-content-between">
            @auth()
                @can('destroy', $contract)
                    @if (Auth::id() !== $contract->user_id)
                        @if (Auth::user()->sent($user))
                            <h5>Sent</h5>
                        @else
                            <form method="POST" action="">
                                @csrf
                                <button class="btn-success">Send to Buyer</button>
                            </form>
                        @endif
                    @endif
                @endcan
            @endauth
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $contract->created_at->diffForHumans() }} </span>
            </div>
        </div>
    </div>
</div>