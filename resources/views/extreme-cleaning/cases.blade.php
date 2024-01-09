@extends('layout')

@section('title', __('titles.extreme-cleaning.cases.title'))
@section('description', __('titles.extreme-cleaning.cases.description'))
@section('ogTitle', __('titles.extreme-cleaning.cases.ogTitle'))
@section('ogDescription', __('titles.extreme-cleaning.cases.ogDescription'))

@section('content')
    <x-service-banner :$banner />
    <x-stages :$stages />
    <x-recommend :$recommend />
    <x-four-advantages :$fourAdvantages />
    <x-type-clients :$typeClients />
    <x-lead>
        margin: 0;
    </x-lead>
@endsection
