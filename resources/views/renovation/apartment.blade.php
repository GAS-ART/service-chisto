@extends('layout')

@section('title', __('titles.renovation.apartment.title'))
@section('description', __('titles.renovation.apartment.description'))
@section('ogTitle', __('titles.renovation.apartment.ogTitle'))
@section('ogDescription', __('titles.renovation.apartment.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="link">renovation</x-slot>
        <x-slot name="main">@lang('renovation.apartment.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('renovation.apartment.breadcrumbs.current_page')</x-slot>
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
