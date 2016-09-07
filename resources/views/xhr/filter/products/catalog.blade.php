@if(count($lists) > 0)
    <div class="filter-layer">
        <div class="filter-sub filter-open" id="filter-industry">
            <div class="row">
                @foreach($lists as $list)
                    <div class="col-xs-3">
                        <a href="#" class="filter-sub-link" data-parent="{{ $list->parent_id }}" data-id="{{ $list->id }}">
                            <i class="fa fa-volume-up"></i> {{ $list->industry->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif