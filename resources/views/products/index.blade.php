@extends('products.layout')
 
@section('content')
    <div>
        <div>
            <div>
                <h2>Laravel 10 Product CRUD application</h2>
            </div>
            <div>
                <a href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    <br />
   
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table border="1" style="width: 100%;">
        <tr>
            <th style="padding-left: 15px;">No</th>
            <th>Name</th>
            <th>Details</th>
            <th style="width: 280px;">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr style="border: 1px solid #000;">
            <td style="padding-left: 15px;">{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a href="{{ route('products.show',$product->id) }}">Show</a>&nbsp;&nbsp;
                    <a href="{{ route('products.edit',$product->id) }}">Edit</a>&nbsp;&nbsp;

                    @csrf
                    @method('DELETE')
      
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br />
  
    {!! $products->links() !!}
      
@endsection