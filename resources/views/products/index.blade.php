@extends('products.layout')

@section('title', 'Products')

@section('content')
    <section class="page-heading">
        <div>
            <p class="eyebrow">Resource overview</p>
            <h1>Products</h1>
            <p class="lead">Create, review, edit, and remove product records through a focused Laravel resource workflow.</p>
        </div>
        <a class="button" href="{{ route('products.create') }}">+ Add product</a>
    </section>

    @if ($message = Session::get('success'))
        <div class="alert" role="status">{{ $message }}</div>
    @endif

    <div class="table-wrap">
        <table class="product-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td class="product-name">{{ $product->name }}</td>
                        <td class="product-detail">{{ $product->detail }}</td>
                        <td>
                            <div class="actions">
                                <a class="text-link" href="{{ route('products.show', $product->id) }}">View</a>
                                <a class="text-link" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button danger-button" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No products found. Add your first product to get started.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {!! $products->links() !!}
@endsection