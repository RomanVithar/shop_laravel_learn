@extends('layout')

@section('title') {{auth()->user()->name}} @endsection

@section('main_content')
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-dark btn-logout">выйти</button>
    </form>
    <br>
    @if(auth()->user()->email == 'admin@admin.admin')
        <h2>Пользователи</h2>
        <table>
            <tbody>
            <tr>
                <th>id</th>
                <th>почта</th>
                <th>имя</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->name}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <h2>Товары</h2>
        <table>
            <tbody>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Стоимость</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->cost}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h2>Сделки</h2>
        <table>
            <tbody>
            <tr>
                <th>id </th>
                <th>id пользователя_</th>
                <th>статус</th>
            </tr>
            @foreach($deals as $deal)
                <tr>
                    <td>{{$deal->id}}</td>
                    <td>{{$deal->user_id}}</td>
                    <td>{{$deal->status}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
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
