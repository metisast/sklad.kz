<div class="filter-sub filter-open" id="filter-product-type">
    <div class="col-xs-4">
        @foreach($productTypes as $prod)
            <a href="#1" class="filter-sub-link" data-type="category" data-id="{{ $prod->id }}">{{ $prod->name }}</a>
        @endforeach
    </div>
</div>