@extends('layout')

@section('content')
    <h1>{{ $product->title }}</h1>
    <hr />
    <h3>Тип:</h3>
    <div class="well well-sm">{{ $product->type }}</div>
    <h3>Категория:</h3>
    <div class="well well-sm">{{ $product->category }}</div>
    <h3>Бренд:</h3>
    <div class="well well-sm">{{ $product->brand }}</div>
    <h3>Название:</h3>
    <div class="well well-sm">{{ $product->title }}</div>
    <h3>Описание:</h3>
    <div class="well well-sm">{{ $product->description }}</div>
    <h3>Стоимость:</h3>
    <div class="well well-sm">{{ $product->price }} руб.</div>
    @if(Auth::user()->canI('admin_all'))
        <div>
            <a href="/product/{{ $product->id }}/edit" class="btn btn-warning pull-left">Редактировать продукт</a>
            {!!  Form::model($product, ['method' => 'DELETE', 'action' => ['ProductController@destroy',$product->id ]] )  !!}
                {!! Form::submit('Удалить продукт', ['class' => 'btn btn-default pull-right']) !!}
            {!! Form::close() !!}
        </div>
    @endif
@stop
