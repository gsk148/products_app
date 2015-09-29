@extends('layout')

@section('content')
    <h1>Страница регистрации</h1>
    {!! Form::open(['url' => '/auth/register']) !!}

    @include('user.form')

            <!-- password Form input -->
    <div class="form-group">
        {!! Form::label('password', 'Пароль:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <!-- password Form input -->
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Подтверждение пароля:') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

            <!-- Register user Form submit -->
    <div class="form-group">
        {!! Form::submit('Зарегистрироваться', ['class' => 'btn btn-primary form-control', 'style' => 'margin-top:20px;']) !!}
    </div>

    {!! Form::close() !!}

    @include('errors.list')
@stop