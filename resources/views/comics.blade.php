@extends('layouts.app')

@section('content')
<section class="cards">

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            @forelse($cards as $card)
            <div class="col">
                <div class="card">
                    <img class="img-fluid" src="{{$card['thumb']}}" alt="">
                    <h5 class="pb-2">{{$card['title']}}</h5>
                </div>
            </div>
            
            @empty
            <div class="col">
                <p>No Cards to show!</p>
            </div>
            
            @endforelse
        </div>
    </div>
    
</section>



@endsection
