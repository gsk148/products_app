@extends('layout')

@section('content')
    <h1>Зарегистрированные пользователи</h1>

    @if( ! $users )
        <h4>Нет зарегистрированных пользователей!</h4>
    @else
        <ul>
        @foreach( $users as $user )
          <li><a href="user/{{ $user->id }}"> {{ $user->last_name }} {{ $user->name }} </a> | {{ $user->service }} | {{ $user->phone }} | <a href="mailto:{{ $user->email }}"> {{ $user->email }} </a></li>
        @endforeach
        </ul>
    @endif

@stop