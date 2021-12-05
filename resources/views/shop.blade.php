@extends('layout')

@section('import')
    <script src="/js/shop.js" defer></script>
@endsection

@section('title') Магазин @endsection

@section('main_content')
    <form action="seek_product/" method="GET">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="title" class="form-control" placeholder="Введите строку для поиска" aria-label="Введите строку для поиска" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Отфильтровать</button>
            </div>
        </div>
    </form>
    <div class="card-columns">
        @csrf
        @foreach($products as $product)
            <div class="card">
                <a href="/product/{{$product->id}}">
                    <img src="{{$product->image}}" class="card-img-top" alt="...">
                </a>
                <div class="card-body card-{{$product->id}}">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <h3 class="text-center">{{$product->cost}} ₽</h3>

                @isset($in_user_list)
                    <!--{{$flag = true}}-->
                        @foreach($in_user_list as $item)
                            @if($product == $item[0])
                                <ul class="list-horizontal count-product-{{$item[0]->id}} text-center">
                                    <li>
                                        <button data-id="{{$item[0]->id}}" class="minus-product btn btn-dark">-</button>
                                    </li>
                                    <li>
                                        <p class="count-product-{{$item[0]->id}} count-text">{{$item[1]}}</p>
                                    </li>
                                    <li>
                                        <button data-id="{{$item[0]->id}}" class="plus-product btn btn-dark">+</button>
                                    </li>
                                </ul>
                            <!--{{$flag = false}}-->
                            @endif
                        @endforeach
                        @if($flag)
                            <button type="submit" data-id="{{$product->id}}"
                                    class="bth btn-outline-dark center btn-lg btn-block button add-product">
                                В корзину!
                            </button>
                        @endif
                    @else
                    @endisset
                </div>
            </div>
        @endforeach
    </div>

@endsection
