@extends('layouts.app')
@section('title')
  Customer
@endsection
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>AGE</th>
        <th>NATIONALITY</th>
        <th>PREMIUM</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($customers as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->firstname}}</td>
        <td>{{$item->lastname}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->nationality}}</td>
        <td>{{$item->premium ? 'attivo' : 'disattivo'}}</td>
        <td>
          {{-- <a href="{{route('customers.show',$item->id)}}">View</a> --}}
          <a href="{{route('customers.edit',$item->id)}}">Edit</a>
          {{-- <form action="{{route('customers.destroy',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button><a style="color: red">Delete</a></button>
            
          </form> --}}
          
        </td>
      </tr>
      @empty
      <tr>
        <td>No Customer</td>
      </tr>
      @endforelse
    </tbody>
  </table>
@endsection