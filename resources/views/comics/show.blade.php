@extends('layouts.app')

@section('content')

<div class="single_card bg-light">

    <div class="container py-5">

        <div class="row">
            <div class="col">
                <div class="card_title d-flex">
                    <img width="50" src="{{$card['thumb']}}" alt="">
                    <h1 class="pb-2">{{$card['title']}}</h1>
                </div>
                <div class="content">
                    {!! $card['description'] !!}
                </div>
                <hr>
                <div class="metadata">
                    <span>
                        <strong>Tipo: </strong>
                        {{$card['type']}}
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection