@extends('products.layout')
  
@section('content')

    <div>
        <div>
            <div>
                <h2> Show Product</h2>
            </div>
            <div>
                <a href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br />
   
    <div>
        <div>
            <div>
                <strong>Name:</strong>
                <br />
                {{ $product->name }}
            </div>
        </div>
        <br />
        <div>
            <div>
                <strong>Details:</strong>
                <br />
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection
