@extends('layouts.main-layout')

@section('content')

  <h1>Locations</h1>
  <ul>

    @foreach ($locations as $location)
      <li>
        <a href="{{ route('locations-show', $location -> id)}}">
          {{  $location -> id  }}
          {{  $location -> name  }}
        </a>
      </li>
    @endforeach

  </ul>

@endsection
