@extends('layout')

@section('title'){{$product->title}}@endsection

@section('main_content')

    <img src="{{$product->image}}" alt="...">
    <h1>{{$product->title}}</h1>
    <h2>Описание</h2>
    <p>{{$product->description}}</p>
    <h3> Стоимость: {{$product->cost}} рубля</h3>
    <p> Вес товара: {{$product->weight}} грамма</p>
    <p> Размер: {{$product->dimension}} мм</p>

@endsection


