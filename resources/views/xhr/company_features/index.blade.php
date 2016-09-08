{{-- Company features view --}}
<div class="modal-dialog modal-lg" id="company-features" data-count="4">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Деятельность вашей компании
                <span class="label label-primary">осталось <i>4</i></span>
            </h4>
        </div>
        <div class="modal-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                @foreach($mainCategories as $mC)
                    @if($mC->id == 1)
                        <li class="active"><a href="#{{ $mC->styles }}" data-toggle="tab">{{ $mC->name }}</a></li>
                    @else
                        <li><a href="#{{ $mC->styles }}" data-toggle="tab">{{ $mC->name }}</a></li>
                    @endif
                @endforeach
            </ul>

            <!-- Tab panes -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="tab-content">

                        @foreach($mainCategories as $mC)
                            @if($mC->id == 1)
                                <div class="tab-pane fade in active col-xs-12" id="{{ $mC->styles }}">
                                    @foreach(\App\Models\MainCategory::getAllIndustriesByMainCategoryId($mC->id) as $list)
                                        <div class="col-xs-3">
                                            <a href="#" class="catalog-industry" data-industry-id="{{ $list->id }}">{{ $list->name }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="tab-pane fade col-xs-12" id="{{ $mC->styles }}">
                                    @foreach(\App\Models\MainCategory::getAllIndustriesByMainCategoryId($mC->id) as $list)
                                        <div class="col-xs-3">
                                            <a href="#" class="catalog-industry" data-industry-id="{{ $list->id }}">{{ $list->name }}</a>
                                        </div>
                                    @endforeach
                                </div>

                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary">Сохранить изменения</button>
        </div>
    </div>
</div>