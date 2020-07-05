@extends('layout')

@section('main-content')
    <div class="col-sm-8">
        <h2>
            New product
            <a href="{{route('products.index')}}" class="btn btn-default pull-right">List</a>

        </h2>

        @include('products.fragment.error')

        {!! Form::open( ['route'=>'products.store']) !!}

        @include('products.fragment.form')

        {!! Form::close() !!}

    </div>
    <div class="col-sm-4">
        @include('products.fragment.aside')
    </div>
@endsection