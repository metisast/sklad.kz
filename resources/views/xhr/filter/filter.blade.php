{{-- The filter template --}}

<div class="tabs">
    <div class="tabs__content">
        <div class="filter-tree">
            <!-- Put the filter btn -->
        </div>
        <div class="filter-layer">
            <div class="filter-sub filter-open">
                <div class="row">
                    @foreach($lists as $ind)
                        <div class="col-xs-3">
                            <a href="#" class="filter-sub-link" data-main="{{ \App\Models\Industry::find($ind->industry_id)->mainCategories()->first()->id }}" data-parent="{{ $ind->parent_id }}" data-id="{{ $ind->id }}">
                                <i class="fa fa-volume-up"></i> {{ $ind->industry->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="filter-catalog">
                    <!-- Put the filter catalog -->
                </div>
            </div>
        </div>
        <!-- Advanced search -->
        <div class="row">
            <div class="col-xs-12">
                <div class="filter-layer">
                    <a href="#" id="advance-search" class="dashed">
                        <i class="fa fa-search" style="color: #aaa"></i>
                        <span>Рассширенный поиск</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="filter-layer">
                <div class="advance-form">
                    <!-- Put the advance features -->
                </div>
            </div>
        </div>
        <!-- Search button -->
        <div class="col-xs-12">
            <div class="filter-layer">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-success">Найти</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>