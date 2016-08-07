<div class="filter-sub filter-open" id="filter-category">
    <div class="col-xs-4">
        @foreach($categories as $cat)
            <a href="#1" class="filter-sub-link" data-type="category" data-id="{{ $cat->id }}">{{ $cat->name }}</a>
        @endforeach
    </div>
</div>