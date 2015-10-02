@extends('layout')

@section('content')
    {!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('type', 'Тип:') !!}
        {!! Form::text('type', $product->type, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'Категория:') !!}
        {!! Form::text('category', $product->category, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('brand', 'Бренд:') !!}
        {!! Form::text('brand', $product->brand, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Название:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Описание:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', 'Стоимость:') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Сохранить изменения', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @include('errors.list')
@endsection
@stop