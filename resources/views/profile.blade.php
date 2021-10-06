@extends('layout')

@section('title') {{auth()->user()->name}} @endsection

@section('main_content')
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-dark btn-logout">выйти</button>
    </form>
    <br>
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-primary">
            <h6>Имя: {{auth()->user()->name}}</h6>
        </li>
        <li class="list-group-item">
            <h6>Фамилия: {{auth()->user()->surname}}</h6>
        </li>
        <li class="list-group-item list-group-item-primary">
            <h6>Отчество: {{auth()->user()->patronymic}}</h6>
        </li>
        <li class="list-group-item">
            <h6>Адрес: {{auth()->user()->address}}</h6>
        </li>
        <li class="list-group-item list-group-item-primary">
            <h6>Почта: {{auth()->user()->email}}</h6>
        </li>
        <li class="list-group-item">
            <h6>Телефон: {{auth()->user()->phone}}</h6>
        </li>
    </ul>
    <br>
    <h3>История заказов</h3>
    <ul class="list-group">
        @foreach(auth()->user()->deals as $deal)
            <li class="list-group-item list-group-item-action list-group-item-light">
                <ul>
                    <li>идентификатор: {{$deal->id}}</li>
                    <li>стоимость: {{$deal->cost}}</li>
                    <li>стоимость доставки: {{$deal->cost_delivery}}</li>
                    <li>тип оплаты: {{$deal->cost_type}}</li>
                    <li>статус: {{$deal->status}}</li>
                    <li>дата создания: {{$deal->created_at}}</li>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
