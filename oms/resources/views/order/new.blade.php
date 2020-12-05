@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <div class="container">
      @foreach ($products as $product)
          {{ $product->name }} <br/>
      @endforeach
  </div>

  {{ $products->links() }}

@endsection

