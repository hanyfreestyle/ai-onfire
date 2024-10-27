@extends('restaurant.layouts.app')
@section('content')


    <div class="category__container__section">


        <div class="view-toggle" onclick="toggleView()">
            <i class="fas fa-th-large"></i>
{{--            <i class="fas fa-stream"></i>--}}
        </div>

        @foreach($categoriesWithProducts as $categoryId => $products)
            <section id="Category-{{$categoryId}}" class="category__section list-view ">
                <h2 class="category__section_h2">
                    <span class="styled-text">{{$products->first()->category_name}}</span>
                    <span class="category-description">{{$products->first()->category_des}}</span>
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
                                <p class="product__des">{{$product->product_des}}</p>
                                <div class="price__container">
                                    @if($product->sale_price)
                                        <span class="old__price">{{$product->sale_price}} <span class="currency">جنية</span></span>
                                    @else
                                        <div class="old__price">
                                            <span class="price-value">{{$product->product_price + rand(50,100)}}</span>
                                            <span class="currency">جنيه</span>
                                        </div>

                                    @endif
                                    <span class="current__price">{{$product->product_price}} <span class="currency">جنية</span></span>
                                </div>
                                <div class="cart__controls">
                                    <div class="quantity__controls">
                                        <button class="quantity__btn minus">-</button>
                                        <span class="quantity">1</span>
                                        <button class="quantity__btn plus">+</button>
                                    </div>
                                    <div class="add_to_cart">
                                        <span class="cart__text">اضف</span>
                                        <span class="desktop__text">للسلة</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
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
        document.addEventListener('DOMContentLoaded', function () {
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

    <script>
        // Toggle between grid and list view
        function toggleView() {
            const container = document.querySelector('.category__section');
            if (container.classList.contains('list-view')) {
                container.classList.remove('list-view');
                container.classList.add('grid-view');
            } else {
                container.classList.remove('grid-view');
                container.classList.add('list-view');
            }
        }

        // Set initial view
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.category__section');
            container.classList.add('list-view');
        });
    </script>

@endpush



