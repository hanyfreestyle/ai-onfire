<div class="horizontal-tabs-container">
    <nav class="horizontal-tabs">
        @foreach($categoriesWithProducts as $categoryId => $products)
            <a href="#Category-{{$categoryId}}" class="tab">{{$products->first()->category_name}}</a>
        @endforeach
    </nav>
</div>
