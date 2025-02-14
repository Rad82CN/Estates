<div class="card">
    <div class="card-body">
        <div class="text-center">
            <div>
                <span class="fs-4 me-1">Phone Number: {{$contract->phone_number}}</span>
            </div>
            <div>
                <span class="fs-4 me-1">Seller Name: {{$contract->seller_name}}</span>
            </div>
            <div>
                <span class="fs-4 me-1">Buyer Name: {{$contract->buyer_name}}</span>
            </div>
            <div>
                <span class="fs-4 me-1">Seller Id Number: {{$contract->seller_id_number}}</span>
            </div>
            <div>
                <span class="fs-4 me-1">Buyer Id Number: {{$contract->buyer_id_number}}</span>
            </div>
            <div>
                <span class="fs-4 me-1">Seller Address: {{$contract->seller_address}}</span>
            </div>
            <div>
                <span class="fs-4 me-1">Buyer Address: {{$contract->buyer_address}}</span>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p class="fs-5 mt-4">
                {{ $contract->description }}
            </p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            @auth()
                @can('destroy', $contract)
                    @if (Auth::id() === $contract->user_id)
                        @if ($contract->sent($user))
                            <form method="POST" action="{{ route('contracts.unsend', [$estate->id, $contract->id]) }}">
                                @csrf
                                <button class="btn-success">unsend</button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('contracts.send', [$estate->id, $contract->id]) }}">
                                @csrf
                                <button class="btn-success">Send to Buyer</button>
                            </form>
                        @endif
                    @endif
                @endcan
            @endauth
            <div>
                <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $contract->created_at->diffForHumans() }} </span>
            </div>
        </div>
    </div>
</div>