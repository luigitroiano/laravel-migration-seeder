@extends('layouts.app')
@section('title')
  Customer-Create
@endsection
@section('content')

<form action="{{ route('customers.update', $customer->id) }}" method="post">
  @method ('PATCH')
  @csrf
  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" value="{{ $customer->firstname }}" id="firstname" class="form-control" placeholder="Inserisci il tuo Nome" aria-describedby="helpId">
    @error('firstname')     
      <div class="alert alert-danger">{{ $message }}</div>     
    @enderror
    <small id="helpId" class="text-muted">Inserisci il tuo Nome</small>
  </div>
  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="text" class="form-control" name="lastname" value="{{ $customer->lastname }}" id="lastname" placeholder="Inserisci il tuo Cognome" >
    @error('lastname')     
      <div class="alert alert-danger">{{ $message }}</div>     
    @enderror
    <small class="text-muted">Inserisci il tuo Cognome</small>
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" id="age" name="age" value="{{ $customer->age }}" min="1" max="110">
    @error('age')     
      <div class="alert alert-danger">{{ $message }}</div>     
    @enderror
    <small class="text-muted">Inserisci la tua Età</small>
  </div>
  <div class="form-group">
    <label for="nationality">Nationality</label>
    <input type="text" class="form-control" name="nationality" value="{{ $customer->nationality }}" id="nationality" placeholder="Inserisci la tua Nazionalità" >
    @error('nationality')     
      <div class="alert alert-danger">{{ $message }}</div>     
    @enderror
    <small class="text-muted">Inserisci la tua Nazionalità</small>
  </div>
  <div class="form-group">
    <label for="premium">Account Premium</label>
    <input type="text" class="form-control" name="premium" value="{{ $customer->premium }}" id="premium" >
    @error('premium')    
      <div class="alert alert-danger">{{ $message }}</div>     
    @enderror
    <small class="text-muted">Account Premium 1=attivo/0=disattivo</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection