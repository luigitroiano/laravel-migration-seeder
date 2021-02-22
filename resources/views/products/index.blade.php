@extends('layouts.app')
@section('title')
  Products
@endsection
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>PRODUCT</th>
        <th>PREZZO</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->price}} €</td>
      </tr>
      @empty
      <tr>
        <td>No Products</td>
      </tr>
      @endforelse
    </tbody>
  </table>
@endsection