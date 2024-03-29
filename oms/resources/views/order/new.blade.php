@extends('layouts.app')

@section('title', 'New Order')

@section('script')
    <script src="{{asset('js/orders/new.js')}}"></script>
@endsection

@section('content')
  Date: {{ \Carbon\Carbon::now() }}
  <br/><br/>
  Order place: <select id="department">
    @foreach ($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name}} </option>
    @endforeach
  </select>
  <table id="product" class="cell-border" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
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
            <td>{{ $product->id }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->code }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->name_jp }}</td>
            <td>{{ $product->unit }}</td>
            <td><input type="text" class="quantity" size="5" /></td>
            <td></td>
            <td></td>
            <td>{{ $product->price }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
