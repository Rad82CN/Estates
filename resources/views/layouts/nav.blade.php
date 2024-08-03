<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
data-bs-theme="dark">
<div class="container">
    <a class="navbar-brand fw-light" href="/"><span class="fas fa-building me-1"> </span>Estates</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            @guest
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endguest
            
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contracts.all.sent', Auth::id()) }}">Sent Contracts</a>
                </li>
                {{-- 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contracts.all.recieved', Auth::id()) }}">Recieved Contracts</a>
                </li>
                --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sent.requests', Auth::id()) }}">Sent Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inbox', Auth::id()) }}">Inbox</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm mx-2" type="submit">Logout</button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</div>
</nav>