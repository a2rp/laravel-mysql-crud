@extends('products.layout')

@section('title', 'View Product')

@section('content')
    <section class="page-heading">
        <div>
            <p class="eyebrow">Product catalog</p>
            <h1>{{ $product->name }}</h1>
            <p class="lead">Review the stored product information.</p>
        </div>
        <div class="actions">
            <a class="button" href="{{ route('products.edit', $product->id) }}">Edit product</a>
            <a class="button" href="{{ route('products.index') }}">Back to products</a>
        </div>
    </section>

    <article class="detail-card">
        <div class="detail-row">
            <strong>Name</strong>
            <p>{{ $product->name }}</p>
        </div>
        <div class="detail-row">
            <strong>Details</strong>
            <p>{{ $product->detail }}</p>
        </div>
    </article>
@endsection