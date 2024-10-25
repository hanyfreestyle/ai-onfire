@extends('restaurant.layouts.app')
@push('CssFile')
    <style>











    </style>

@endpush
@section('content')
    <div class="container category__container__section">
        @for($i = 1; $i <= 2; $i++)
            <section id="Category-{{$i}}" class="category__section">
                <h2>Category {{$i}}</h2>
                <div class="category__container">
                    @for($x = 1; $x <= 1; $x++)
                        <div class="product__card">
                            <div class="card__img">
                                <img src="https://freestyle4u.com/ai/0{{$x}}.webp">
                            </div>
                            <div class="card__name">
                                <h2>Product Name {{$x}}</h2>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
        @endfor
    </div>
@endsection

