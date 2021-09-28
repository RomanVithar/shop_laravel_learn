@extends('layout')

@section('title'){{$product->title}}@endsection

@section('main_content')

    <img src="{{$product->image}}" alt="...">
    <h1>{{$product->title}}</h1>
    <p>{{$product->description}}</p>
    <h2>{{$product->cost}}</h2>
    <p>{{$product->weight}}</p>
    <p>{{$product->dimension}}</p>

@endsection
