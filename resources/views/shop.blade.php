@extends('layout')

@section('title') Магазин @endsection

@section('main_content')

    <div class="card-columns">
        @foreach($products as $product)
            <div class="card">
                <a href="/product/{{$product->id}}">
                    <img src="{{$product->image}}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
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
                            <form action="/add_product" method="GET">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <button type="submit" class="bth btn-outline-dark center btn-lg btn-block">В корзину!
                                </button>
                            </form>
                        @endif
                    @else
                    @endisset
                </div>
            </div>
        @endforeach
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <jli class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>



    <script>

    </script>

@endsection
