@extends('layout')

@section('main-content')
    <div class="col-sm-8">
        <h2>
            Product list
            <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">New</a>
        </h2>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th with="25px">ID</th>
                    <th>Product Name</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <strong>{{ $product->name }}</strong>
                            {{ $product->short }}
                        </td>
                        <td>
                            <a href="{{ route('products.show',$product->id) }}" class="btn btn-link">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-link">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-link">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
    <div class="col-sm-4">
        Some Message
    </div>
@endsection
