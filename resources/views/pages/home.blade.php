@extends('layout')

@section('title')
    Главная страница приложения
@stop

@section('content')
    @if(Auth::user())
        <div class="col-sm-9">
            <h3>Добро пожаловать на сайт!</h3>
            <p>Для того,чтобы...</p>

        </div>
        <div class="col-sm-3">
            <div class="list-group">
                <a href="#" class="list-group-item disabled active">Типы</a>
                <a href="{{ route('oils') }}" class="list-group-item">Масла, смазки</a>
                <a href="{{ route('liquids') }}" class="list-group-item">Технические жидкости</a>
                <a href="#" class="list-group-item disabled active">Категории</a>
                <a href="{{ route('PVL') }}" class="list-group-item">PVL</a>
                <a href="{{ route('CVL') }}" class="list-group-item">CVL</a>
                <a href="{{ route('IND') }}" class="list-group-item">IND</a>
                <a href="#" class="list-group-item disabled active">Бренды</a>
                <a href="{{ route('g-family') }}" class="list-group-item">G-Family</a>
                <a href="{{ route('gazpromneft') }}" class="list-group-item">Газпромнефть</a>
            </div>
        </div>

    @else
        <h3>Главная страница</h3>
        <div class="well">Некоторый текст</div>
    @endif
@stop