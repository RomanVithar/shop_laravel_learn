@extends('layout')

@section('title') Купить @endsection

@section('main_content')
    <h1>Страница покупки</h1>
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
    <h3>Стоимость доставки: 200 ₽</h3>
    <h3>Итоговая стоимость: {{$total_price + 200}} ₽</h3>
    <div>
        @csrf
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Выберите способ оплаты:</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input one" data-id="one" type="radio" name="gridRadios" id="gridRadios" value="card"
                        checked>
                        <label class="form-check-label" for="gridRadios">
                            Карта
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input two" data-id="two" type="radio" name="gridRadios" id="gridRadios" value="cash">
                        <label class="form-check-label" for="gridRadios">
                            Наличные
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Я согласен c условиями аферты
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="bth btn-outline-dark center btn-lg btn-block open-deal">Оплатить</button>
    </div>
@endsection
