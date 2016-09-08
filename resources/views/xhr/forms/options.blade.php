{{-- The options rendering --}}

<option value="">{{ $first_option }}</option>
@foreach($lists as $list)
    <option value="{{ $list->id }}">{{ $list->name }}</option>
@endforeach