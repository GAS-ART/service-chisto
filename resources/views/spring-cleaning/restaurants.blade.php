@extends('layout')

@section('title', __('titles.spring-cleaning.restaurants.title'))
@section('description', __('titles.spring-cleaning.restaurants.description'))
@section('ogTitle', __('titles.spring-cleaning.restaurants.ogTitle'))
@section('ogDescription', __('titles.spring-cleaning.restaurants.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="link">spring-cleaning</x-slot>
        <x-slot name="main">@lang('spring-cleaning.restaurants.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('spring-cleaning.restaurants.breadcrumbs.current_page')</x-slot>
    </x-breadcrumbs>
    <x-service-banner :$banner />
    <x-stages :$stages />
    <x-recommend :$recommend />
    <x-four-advantages :$fourAdvantages />
    <x-type-clients :$typeClients />
    <x-lead>
        margin: 0;
    </x-lead>
@endsection
