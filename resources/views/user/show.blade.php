@extends('layout')

@section('content')
    <h1>Информация о пользователе</h1>
    <table class="table table-bordered table-striped">
        <tr>
            <td><strong>Имя</strong></td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td><strong>Фамилия</strong></td>
            <td>{{ $user->last_name }}</td>
        </tr>
        <tr>
            <td><strong>Телефон</strong></td>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <td><strong>E-mail</strong></td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td><strong>Сервис</strong></td>
            <td>{{ $user->service }}</td>
        </tr>
        <tr>
            <td><strong>Город</strong></td>
            <td>{{ $user->city }}</td>
        </tr>
        <tr>
            <td><strong>Адрес</strong></td>
            <td>{{ $user->address }}</td>
        </tr>
        <tr>
            <td><strong>Должность</strong></td>
            <td>{{ $user->position }}</td>
        </tr>
        <tr>
            <td><strong>Дата регистрации</strong></td>
            <td>{{ $user->created_at }}</td>
        </tr>
    </table>
@stop