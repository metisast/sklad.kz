@extends('layouts.boot')

@section('content')
    {{-- Include Best providers --}}
    @include('includes.main.bestProviders')
    {{-- Include Best adverts --}}
    @include('includes.main.bestAdverts')
    {{-- Include New companies --}}
    @include('includes.main.newCompanies')
    {{-- Include All companies --}}
    @include('includes.main.allCompanies')
    {{-- Include New adverts --}}
    @include('includes.main.newAdverts')
@endsection
