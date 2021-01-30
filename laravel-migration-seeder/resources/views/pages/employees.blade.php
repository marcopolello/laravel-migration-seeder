@extends('layouts.main-layout')

@section('content')

  <h1>Employees</h1>
  <ul>

    @foreach ($emps as $emp)
      <li>
        <a href="{{ route('emps-show', $emp -> id)}}">
          {{  $emp -> name  }}
          {{  $emp -> lastname  }}
        </a>
      </li>
    @endforeach

  </ul>

@endsection
