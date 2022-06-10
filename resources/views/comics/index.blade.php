@extends('layouts.app')

@section('content')
<section class="cards bg-dark">
    <div class="container">

        <div class="current_series text-uppercase text-white bg-primary p-2 position-absolute">
            current series
        </div>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">
            @forelse($cards as $index => $card)
            <div class="col">
                <a class="text-decoration-none" href="{{route('comics.show', $index)}}">
                    <div class="card bg-transparent text-white">
                        <img class="img-fluid" src="{{$card['thumb']}}" alt="">
                        <h5 class="pb-2">{{$card['title']}}</h5>
                    </div>
                </a>
            </div>
            
            @empty
            <div class="col">
                <p>No Cards to show!</p>
            </div>
            
            @endforelse
        </div>
    </div>
</section>

<section class="banner bg-primary">
    <div class="container">
    <div class="row row-cols-5">

        @forelse($itemBanner as $item)
        <div class="cols d-flex align-items-center">
            <img class="image img-fluid" src="{{$item['src']}}" alt="/"/>
            <div class="description text-uppercase px-3">{{$item['title']}}</div>
            <!-- /.description -->
        </div>
        <!-- /.cols -->
        @empty
        <div class="col">
            <p>No Item to show!</p>
        </div>
        
        @endforelse
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->

</section>
<!-- /.banner -->

@endsection
