@extends('layout')

@section('content')
    <h1>Продукция</h1>

    @if ( $products->count() )
        <table class="table table-bordered table-hover">
            <thead class="bg-danger">
                <th>Тип</th>
                <th>Категория</th>
                <th>Брэнд</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Стоимость</th>
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
    @else
        <div class="alert alert-info lead">В настоящий момент данная категория пуста!</div>
    @endif
@stop