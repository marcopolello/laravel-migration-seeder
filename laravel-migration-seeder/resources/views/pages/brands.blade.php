@extends('layouts.main-layout')

@section('content')

  <h1>Brands</h1>
  <ul>

    @foreach ($brands as $brand)
      <li>
        <a href="{{ route('brands-show', $brand -> id)}}">
          {{  $brand -> id  }}
          {{  $brand -> name  }}
        </a>
      </li>
    @endforeach

  </ul>

@endsection
