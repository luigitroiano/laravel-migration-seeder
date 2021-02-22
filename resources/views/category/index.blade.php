@extends('layouts.app')
@section('title')
  Category
@endsection
@section('content')
  <h1>CATEGORY</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>CATEGORY</th>
        <th>TYPE</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($categories as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->type}}</td>
      </tr>
      @empty
      <tr>
        <td>No Products</td>
      </tr>
      @endforelse
    </tbody>
  </table>
@endsection