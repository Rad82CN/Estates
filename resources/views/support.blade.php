@extends('layouts.layout')
@section('title', 'Support')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')     
    </div>

    <div class="col-6">
        <h1>Contact us</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi architecto aperiam quo qui doloremque hic commodi deserunt nihil? Numquam, quod recusandae. Earum voluptate sed, quam delectus quia est distinctio alias cumque sit adipisci error repudiandae, repellendus ullam nemo cupiditate dolor assumenda illum, laboriosam fuga veritatis ipsam! Incidunt suscipit pariatur, rem cupiditate corrupti necessitatibus minima explicabo quo itaque, deleniti, ullam nostrum alias quibusdam quaerat placeat. Est neque minima nisi quos non harum veniam dignissimos consectetur, quisquam nihil vero explicabo expedita voluptates perferendis natus exercitationem ipsa dolor rem nesciunt labore accusantium alias. Commodi, neque eaque saepe adipisci nostrum id fuga, libero, sapiente voluptatum incidunt praesentium laboriosam doloribus sit consequuntur minus omnis suscipit non repellat alias ipsam totam dignissimos enim? Cum omnis laborum, eius soluta incidunt qui reprehenderit velit ratione, explicabo excepturi porro fuga nihil nobis vero esse doloribus nostrum sunt recusandae hic quia. Veniam commodi voluptatem quod libero doloribus ratione quam sint.</p>
    </div>
    <div class="col-3">
        @include('shared.search-bar')

        @include('shared.top-users')
    </div>
</div>

@endsection