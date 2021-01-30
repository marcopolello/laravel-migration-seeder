@extends('layouts.main-layout')

@section('content')

  <h1>{{ $location -> id }}</h1>
  <h1>{{ $location -> name }}</h1>
  <h1>indirizzo:{{ $location -> adress }}</h1>
  <h1>N dipendenti: {{ $location -> employees_number }}</h1>

  <h1 style="color:red;"><a href="{{route('locations-index')}}">
    Turn Back
  </a></h1>

@endsection
