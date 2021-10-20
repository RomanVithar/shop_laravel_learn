@extends('layout')

@section('title') Редактор товаров @endsection

@section('main_content')
    <form action="/create_product/">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Стоимость</label>
            <input type="number" name="cost" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите стоимость">
            <small id="emailHelp" class="form-text text-muted">введите стоимость</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Введите название товара</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите название">
            <small id="emailHelp" class="form-text text-muted">введите название</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Вес</label>
            <input type="number" name="weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите вес">
            <small id="emailHelp" class="form-text text-muted">введите вес</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Размеры</label>
            <input type="number" name="dimension" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите размеры">
            <small id="emailHelp" class="form-text text-muted">введите размеры</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Описание</label>
            <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите описание"></textarea>
            <small id="emailHelp" class="form-text text-muted">введите описание</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Изображение</label>
            <textarea type="text" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите изображение"></textarea>
            <small id="emailHelp" class="form-text text-muted">введите изображение</small>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
@endsection
