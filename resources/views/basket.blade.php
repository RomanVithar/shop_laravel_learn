@extends('layout')

@section('title') Корзина @endsection

@section('main_content')
    <h1>Корзина</h1>
    <div class="card-columns">
            @foreach(auth()->user()->usersProducts as $userProduct)
            <div class="card">
                <a href="/product/{{$userProduct->product->id}}">
                    <img src="{{$userProduct->product->image}}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$userProduct->product->title}}</h5>
                    <h3 class="text-center">{{$userProduct->product->cost}} ₽</h3>
                    <h5>колличество: {{$userProduct->count}}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <h3>Итоговая стоимость: {{$total_price}}</h3>
@endsection
