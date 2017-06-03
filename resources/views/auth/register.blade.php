<!-- resources/views/auth/register.blade.php -->
@extends('app')
@section('title')
{{'Register'}}
@endsection
@section('content')
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    Email
    <div>
        <input type="email" name="email" value="">
    </div>

    Nickname
    <div>
        <input type="text" name="short_name" value="">
    </div>

    Nombre Completo
    <div>
        <input type="text" name="full_name" value="">
    </div>

      <input type="hidden" name="finger_print" value="">
      <input type="hidden" name="finger_print2" value="">

    Password
    <div>
        <input type="password" name="password">
    </div>
    Confirm Password
    <div>
        <input type="password" name="password_confirmation">
    </div>


    <div>
        <button type="submit">Register</button>
    </div>
</form>
@endsection
