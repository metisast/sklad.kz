@if(count($lists) > 0)
    <div class="col-xs-3">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $listTitle }}</div>
            <div class="list-group">
                @foreach($lists as $ind)
                    <a href="#" class="list-group-item"
                       data-parent="{{ $ind->parent_id }}"
                       data-id="{{ $ind->id }}">
                        <span class="badge"><i class="fa fa-angle-right"></i></span>
                        {{ $ind->industry->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endif