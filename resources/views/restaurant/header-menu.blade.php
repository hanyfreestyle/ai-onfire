@extends('restaurant.layouts.app')
@section('content')
{{--    <div class="container category__container__section">--}}
{{--        @foreach($categoriesWithProducts as $categoryId => $products)--}}
{{--            <section id="Category-{{$categoryId}}" class="category__section">--}}
{{--                <h2 class="category__section_h2">--}}
{{--                    <span class="styled-text">{{$products->first()->category_name}}</span>--}}
{{--                </h2>--}}
{{--                <div class="category__container">--}}
{{--                    @foreach($products as $product)--}}
{{--                        <div class="product__card">--}}
{{--                            <div class="card__img">--}}
{{--                                <img src="{{asset($product->product_image) }}">--}}
{{--                            </div>--}}
{{--                            <div class="card__name">--}}
{{--                                <h3>{{$product->product_name}}</h3>--}}
{{--                                <div class="price">{{$product->product_price}}</div>--}}
{{--                                <div class="btn add_to_card">اضف للسلة</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--<div class="container category__container__section">--}}
{{--    @foreach($categoriesWithProducts as $categoryId => $products)--}}
{{--        <section id="Category-{{$categoryId}}" class="category__section">--}}
{{--            <h2 class="category__section_h2">--}}
{{--                <span class="styled-text">{{$products->first()->category_name}}</span>--}}
{{--            </h2>--}}
{{--            <div class="category__container">--}}
{{--                @foreach($products as $product)--}}
{{--                    <div class="product__card">--}}
{{--                        <div class="product__image">--}}
{{--                            <img src="{{asset($product->product_image) }}" alt="{{$product->product_name}}">--}}
{{--                            <div class="product__overlay">--}}
{{--                                <button class="add_to_cart">اضف للسلة</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product__details">--}}
{{--                            <h3 class="product__name">{{$product->product_name}}</h3>--}}
{{--                            <div class="product__price">{{$product->product_price}} ريال</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    @endforeach--}}
{{--</div>--}}


{{--<div class="container category__container__section">--}}
{{--    @foreach($categoriesWithProducts as $categoryId => $products)--}}
{{--        <section id="Category-{{$categoryId}}" class="category__section">--}}
{{--            <h2 class="category__section_h2">--}}
{{--                <span class="styled-text">{{$products->first()->category_name}}</span>--}}
{{--            </h2>--}}
{{--            <div class="category__container">--}}
{{--                @foreach($products as $product)--}}
{{--                    <div class="product__card">--}}
{{--                        <div class="product__image">--}}
{{--                            <img src="{{asset($product->product_image) }}" alt="{{$product->product_name}}">--}}
{{--                        </div>--}}
{{--                        <div class="product__details">--}}
{{--                            <h3 class="product__name">{{$product->product_name}}</h3>--}}
{{--                            <div class="product__price">{{$product->product_price}} ريال</div>--}}
{{--                            <div class="cart__controls">--}}
{{--                                <div class="quantity__controls">--}}
{{--                                    <button class="quantity__btn minus">-</button>--}}
{{--                                    <span class="quantity">1</span>--}}
{{--                                    <button class="quantity__btn plus">+</button>--}}
{{--                                </div>--}}
{{--                                <button class="add_to_cart">اضف للسلة</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    @endforeach--}}
{{--</div>--}}





{{--<div class="container category__container__section">--}}
{{--    @foreach($categoriesWithProducts as $categoryId => $products)--}}
{{--        <section id="Category-{{$categoryId}}" class="category__section">--}}
{{--            <h2 class="category__section_h2">--}}
{{--                <span class="styled-text">{{$products->first()->category_name}}</span>--}}
{{--            </h2>--}}
{{--            <div class="category__container">--}}
{{--                @foreach($products as $product)--}}
{{--                    <div class="product__card">--}}
{{--                        <div class="product__image">--}}
{{--                            <div class="image__wrapper">--}}
{{--                                <img src="{{asset($product->product_image) }}" alt="{{$product->product_name}}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product__details">--}}
{{--                            <h3 class="product__name">{{$product->product_name}}</h3>--}}
{{--                            <div class="product__price">{{$product->product_price}} ريال</div>--}}
{{--                            <div class="cart__controls">--}}
{{--                                <div class="quantity__controls">--}}
{{--                                    <button class="quantity__btn minus">-</button>--}}
{{--                                    <span class="quantity">1</span>--}}
{{--                                    <button class="quantity__btn plus">+</button>--}}
{{--                                </div>--}}
{{--                                <button class="add_to_cart">اضف للسلة</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    @endforeach--}}
{{--</div>--}}



<div class="container category__container__section">
    @foreach($categoriesWithProducts as $categoryId => $products)
        <section id="Category-{{$categoryId}}" class="category__section">
            <h2 class="category__section_h2">
                <span class="styled-text">{{$products->first()->category_name}}</span>
            </h2>
            <div class="category__container">
                @foreach($products as $product)
                    <div class="product__card">
                        <div class="product__image">
                            <div class="image__wrapper">
                                <img src="{{asset($product->product_image) }}" alt="{{$product->product_name}}">
                            </div>
                        </div>
                        <div class="product__details">
                            <h3 class="product__name">{{$product->product_name}}</h3>
                            <div class="price__container">
                                @if($product->sale_price)
                                    <span class="old__price">{{$product->sale_price}} <span class="currency">جنية</span></span>
                                @endif
                                <span class="current__price">{{$product->product_price}} <span class="currency">جنية</span></span>
                            </div>
                            <div class="cart__controls">
                                <div class="quantity__controls">
                                    <button class="quantity__btn minus">-</button>
                                    <span class="quantity">1</span>
                                    <button class="quantity__btn plus">+</button>
                                </div>
                                <button class="add_to_cart">
                                    <span class="cart__text">اضف</span>
                                    <span class="desktop__text">للسلة</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endforeach
</div>



@endsection

@push('JsFile')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all quantity control elements
            const quantityControls = document.querySelectorAll('.quantity__controls');

            quantityControls.forEach(control => {
                const minusBtn = control.querySelector('.minus');
                const plusBtn = control.querySelector('.plus');
                const quantitySpan = control.querySelector('.quantity');

                let quantity = 1;

                plusBtn.addEventListener('click', () => {
                    quantity++;
                    quantitySpan.textContent = quantity;
                });

                minusBtn.addEventListener('click', () => {
                    if (quantity > 1) {
                        quantity--;
                        quantitySpan.textContent = quantity;
                    }
                });
            });
        });
    </script>
@endpush



