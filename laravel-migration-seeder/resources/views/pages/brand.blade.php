@extends('layouts.main-layout')

@section('content')

  <h1>{{ $brand -> id }}</h1>
  <h1>{{ $brand -> name }}</h1>
  <h1>sito logo:{{ $brand -> logo }}</h1>
  <h1>sedi: {{ $brand -> company_offices }}</h1>

  <h1 style="color:red;"><a href="{{route('brands-index')}}">
    Turn Back
  </a></h1>

@endsection
