<div class="horizontal-tabs-container">
    <nav class="horizontal-tabs">
        @for($i = 1; $i <= 9; $i++)
            <a href="#Category-{{$i}}" class="tab">Category {{$i}}</a>
        @endfor
    </nav>
</div>
