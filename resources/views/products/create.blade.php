@extends('products.layout')

@section('title', 'Add Product')

@section('content')
    <section class="page-heading">
        <div>
            <p class="eyebrow">Product catalog</p>
            <h1>Add product</h1>
            <p class="lead">Create a product record with a clear name and useful details.</p>
        </div>
        <a class="button" href="{{ route('products.index') }}">Back to products</a>
    </section>

    @if ($errors->any())
        <div class="error-list" role="alert">
            <strong>Please review the form:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-card" action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-field">
            <label for="name">Product name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter product name" required>
        </div>
        <div class="form-field">
            <label for="detail">Product details</label>
            <textarea id="detail" name="detail" placeholder="Describe the product" required>{{ old('detail') }}</textarea>
        </div>
        <button class="button" type="submit">Save product</button>
    </form>
@endsection