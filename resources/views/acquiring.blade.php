@extends('layout')

@section('title') Банк @endsection

@section('main_content')
    <h1>Банк</h1>
    <h3>Стоимость к оплате: {{$deal->cost}}</h3>
    <div class="form-group">
        <label for="card_number">Введите номер карты</label>
        <input type="number" class="form-control" id="card_number">
        <button type="submit" data-id="{{$deal->id}})" class="bth btn-outline-dark center btn-lg btn-block close-deal">
            Оплатить
        </button>
    </div>
@endsection
