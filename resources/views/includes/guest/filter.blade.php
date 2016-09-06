{{-- Filter --}}
<div class="col-xs-12" id="filter">
    <div>
        <div class="row">
            <!-- Tabs start-->
            <div class="col-xs-12">
                <ul class="tabs__caption nav-pills" data-show="false">
                    @foreach($main_categories as $main)
                        <li class="tabs-{{ $main->styles }}" data-id="{{ $main->id }}">{{ $main->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-12 filter-left">
                <!-- Put the filter lists -->
            </div>
        </div>
    </div>
</div>    <!-- Tabs end -->
