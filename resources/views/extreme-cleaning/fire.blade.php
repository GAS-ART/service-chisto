@extends('layout')

@section('title', __('titles.extreme-cleaning.fire.title'))
@section('description', __('titles.extreme-cleaning.fire.description'))
@section('ogTitle', __('titles.extreme-cleaning.fire.ogTitle'))
@section('ogDescription', __('titles.extreme-cleaning.fire.ogDescription'))

@section('content')
    <x-service-banner :$banner />
    <x-stages :$stages />
    <x-recommend :$recommend />
    <x-four-advantages :$fourAdvantages />
    <x-slider :$slider />
    <x-type-clients :$typeClients />
    <x-lead>
        margin: 0;
    </x-lead>
@endsection
