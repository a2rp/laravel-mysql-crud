@extends('products.layout')
   
@section('content')
    <div>
        <div>
            <div>
                <h2>Edit Product</h2>
            </div>
            <div>
                <a href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div>
            <div>
                <div>
                    <strong>Name:</strong>
                    <br />
                    <input type="text" name="name" value="{{ $product->name }}" placeholder="Name" style="width: 300px;">
                </div>
            </div>
            <br />
            <div>
                <div>
                    <strong>Detail:</strong>
                    <br />
                    <textarea style="height:150px; width: 300px;" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <br />
            <div>
              <button type="submit">Submit</button>
            </div>
        </div>
   
    </form>

@endsection