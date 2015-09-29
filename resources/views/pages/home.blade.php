@extends('layout')

@section('title')
    Главная страница приложения
@stop



@section('content')
    @if(Auth::user())
        <h3>Добро пожаловать на сайт!</h3>
        <p>Для того,чтобы...</p>
    @else
        <h3>Главная страница</h3>
        <div class="well">Некоторый текст</div>
    @endif
@stop