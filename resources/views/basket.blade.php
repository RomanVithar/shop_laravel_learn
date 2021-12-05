@extends('layout')

@section('title') Корзина @endsection

@section('main_content')
    <h1>Корзина</h1>
    <div class="card-columns">
        @foreach(auth()->user()->usersProducts as $userProduct)
            <div class="card" id="product{{$userProduct->product->id}}">
                <a href="/product/{{$userProduct->product->id}}">
                    <img src="{{$userProduct->product->image}}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$userProduct->product->title}}</h5>
                    <h3 class="text-center">{{$userProduct->product->cost}} ₽</h3>
                    <h5>колличество: {{$userProduct->count}}</h5>
                    <div>
                        <button data-id="{{$userProduct->product->id}}" data-cost="{{$userProduct->product->cost}}"
                                class="btn btn-outline-dark center btn-lg btn-block rm_product">Убрать из корзины
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <form action="empty_basket/" method="GET">
        @csrf
        <button type="submit" class="btn btn-dark btn-primary btn-lg btn-block delete-all">Удалить всё</button>
    </form>
    <br>
    <br>
    <h3>Итоговая стоимость: <i class="total-cost">{{$total_price ?? ''}}</i> ₽</h3>
    <a href="create_deal/" class="btn btn-info col-sm-12">Купить</a>
    <br>
    <br>
@endsection
