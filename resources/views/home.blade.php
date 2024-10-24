@extends('restaurant.layouts.app')
@section('content')
    <!-- القسم الرئيسي - Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>أشهى المأكولات بين يديك</h1>
            <p>استمتع بأفضل الأطباق الشهية مع خدمة التوصيل السريع</p>
            <button class="btn order-now">اطلب الآن</button>
        </div>
    </section>

    <!-- قسم الأصناف المميزة -->
    <section class="featured-categories">
        <h2>الأصناف المميزة</h2>
        <div class="categories-container">
            <div class="category-card">
                <img src="images/cat1.jpg" alt="صنف 1">
                <h3>المشويات</h3>
            </div>
            <!-- يمكن تكرار category-card حسب الحاجة -->
        </div>
    </section>

    <!-- قسم العروض الخاصة -->
    <section class="special-offers">
        <h2>عروضنا المميزة</h2>
        <div class="offers-container">
            <div class="offer-card">
                <img src="images/offer1.jpg" alt="عرض 1">
                <div class="offer-content">
                    <h3>عرض اليوم</h3>
                    <p>وصف العرض</p>
                    <button class="btn">استفد من العرض</button>
                </div>
            </div>
            <!-- يمكن تكرار offer-card حسب الحاجة -->
        </div>
    </section>
@endsection
