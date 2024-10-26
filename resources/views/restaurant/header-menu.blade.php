@extends('restaurant.layouts.app')
@section('content')
    <div class="container category__container__section">
        @foreach($categoriesWithProducts as $categoryId => $products)
            <section id="Category-{{$categoryId}}" class="category__section">
                <h2 class="category__section_h2">
                    <span class="styled-text">{{$products->first()->category_name}}</span>
                </h2>
                <div class="category__container">

                    @foreach($products as $product)
                        <div class="product__card">
                            <div class="card__img">
                                <img src="{{asset($product->product_image) }}">
                            </div>
                            <div class="card__name">
                                <h2>{{$product->product_name}}</h2>
                                <h2>{{$product->product_price}}</h2>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
        @endforeach
    </div>
@endsection



