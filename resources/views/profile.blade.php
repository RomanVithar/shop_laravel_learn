@extends('layout')

@section('title') {{auth()->user()->name}} @endsection

@section('main_content')
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-dark">выйти</button>
    </form>
    <br>
    <br>
    <p>name: {{auth()->user()->name}}</p>
    <p>surname: {{auth()->user()->surname}}</p>
    <p>patronymic: {{auth()->user()->patronymic}}</p>
    <p>address: {{auth()->user()->address}}</p>
    <p>email: {{auth()->user()->email}}</p>
    <p>phone: {{auth()->user()->phone}}</p>
    <br>
    <h3>История заказов</h3>
    <ul>
        @foreach(auth()->user()->deals as $deal)
            <li>
                <p>стоимость доставки: {{$deal->cost_delivery}}</p>
                <p>тип оплаты: {{$deal->cost_type}}</p>
                <p>статус: {{$deal->status}}</p>
                <p>дата создания: {{$deal->created_at}}</p>
            </li>
        @endforeach
    </ul>
@endsection
