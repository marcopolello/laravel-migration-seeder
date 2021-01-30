@extends('layouts.main-layout')

@section('content')

  <h1>
    {{ $emp -> id }}
    {{ $emp -> name }}
    {{ $emp -> lastname }}
  </h1>
  <h1>
    <a href="{{route('emps-index')}}">
      Torna indietro
    </a>
  </h1>

@endsection
