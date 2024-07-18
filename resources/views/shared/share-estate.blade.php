@auth()
    <h4> Share your Estates Here </h4>
    <form action="#">
        <div class="row">
            <div class="">
                <button class="btn btn-dark"> Share </button>
            </div>
        </div>
    </form>
@endauth
@guest()
    <h4> Login to share </h4>
@endguest
<hr>