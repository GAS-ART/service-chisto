@extends('layout')

@section('title', __('titles.spring-cleaning.apartment.title'))
@section('description', __('titles.spring-cleaning.apartment.description'))
@section('ogTitle', __('titles.spring-cleaning.apartment.ogTitle'))
@section('ogDescription', __('titles.spring-cleaning.apartment.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="link">spring-cleaning</x-slot>
        <x-slot name="main">@lang('spring-cleaning.apartment.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('spring-cleaning.apartment.breadcrumbs.current_page')</x-slot>
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
