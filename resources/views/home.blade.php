<!-- resources/views/auth/login.blade.php -->
@extends('app')
@section('title')
{{'Home view'}}
@endsection
@section('content')

    {!! csrf_field() !!}

    <div>
      <h2>
        Hello
        @if( !Auth::guest() )
      {{ Auth::user()->short_name }}
      @endif
      </h2>
    </div>
@endsection
