@extends('layout')

@section('content')
    {!!  Form::model($user, ['method' => 'PATCH','action' => ['UserController@update', $user->id], 'class' => 'horizontal']) !!}

    <fieldset>
        <legend>Редактирование данных пользователя</legend>
        @include('user.form')
        
        <!-- Сохранить данные Form submit -->
        <div class="form-group">
          {!! Form::submit('Сохранить данные', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </fieldset>
    {!!  Form::close()  !!}
    @include('errors.list')
@stop