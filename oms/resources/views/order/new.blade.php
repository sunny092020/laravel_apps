@extends('layouts.app')

@section('title', 'New Order')

@section('script')
    <script src="{{asset('js/orders/new.js')}}"></script>
@endsection

@section('content')
  Date: 2020/11/11
  <br/>
  Order place: <input type="text" size="5" />
  <table id="product" class="cell-border" style="width:100%">
    <thead>
        <tr>
            <th>type</th>
            <th>code</th>
            <th>name</th>
            <th>name jp</th>
            <th>unit</th>
            <th>quantity</th>
            <th>previous day quantity</th>
            <th>previous week quantity</th>
            <th>price</th>
            <th>total</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->type }}</td>
            <td>{{ $product->code }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->name_jp }}</td>
            <td>{{ $product->unit }}</td>
            <td><input type="text" size="5" /></td>
            <td></td>
            <td></td>
            <td>{{ $product->price }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
