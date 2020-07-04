@extends('layout')

@section('main-content')
    <div class="col-sm-8">
        <h2>
            {{ $product->name }}
        </h2>

        <p>
            {{ $product->short }}
        </p>

        {!! $product->description !!}

    </div>
    <div class="col-sm-4">
        Some Message
    </div>
@endsection
