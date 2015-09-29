@extends('layout')

@section('content')
    <h1>Продукция</h1>
    <table class="table table-bordered table-hover">
        <thead class="bg-info">
            <td>Тип</td>
            <td>Категория</td>
            <td>Брэнд</td>
            <td>Название</td>
            <td>Описание</td>
            <td>Стоимость</td>
        </thead>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->type }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->brand }}</td>
                <td><a href="/product/{{ $product->id }}"> {{ $product->title }}</a></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </table>
@stop