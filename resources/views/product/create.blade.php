@extends('layout')

@section('content')
    {!! Form::open(['route' => 'product.store', 'class' => 'form-horizontal' ]) !!}

    <div class="form-group">
        <label class="control-label">Тип:</label>
        <select name="type" id="type" class="form-control">
            <option>Масла, смазки</option>
            <option>Технические жидкости</option>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">Категория:</label>
        <select name="category" id="category" class="form-control">
            <option>PVL</option>
            <option>CVL</option>
            <option>IND</option>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">Бренд:</label>
        <select name="brand" id="brand" class="form-control">
            <option>G-Family</option>
            <option>Газпромнефть</option>
        </select>
    </div>
    
    <div class="form-group">
        {!! Form::label('title', 'Название:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('description', 'Описание:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <!-- price Form input -->
    <div class="form-group">
        {!! Form::label('price', 'Стоимость в рублях:') !!}
        {!! Form::number('price', null, ['class' => 'form-control']) !!}
    </div>
        
    <!-- Добавить новый продукт Form submit -->
    <div class="form-group">
      {!! Form::submit('Добавить новый продукт', ['class' => 'btn btn-primary form-control']) !!}
    </div>    
    {!! Form::close() !!}

    @include('errors.list')
@endsection

@stop