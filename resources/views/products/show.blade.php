@extends('layout')

@section('main-content')
    <div class="col-sm-8">
        <h2>
            {{ $product->name }}
            <a href="{{route('products.edit',$product->id)}}" class="btn btn-default pull-right">Edit</a>
        </h2>

        <p>
            {{ $product->short }}
        </p>

        {!! $product->description !!}

    </div>
    <div class="col-sm-4">
        @include('products.fragment.aside')
    </div>
@endsection
