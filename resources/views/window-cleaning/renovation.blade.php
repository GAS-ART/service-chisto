@extends('layout')

@section('title', __('titles.window-cleaning.renovation.title'))
@section('description', __('titles.window-cleaning.renovation.description'))
@section('ogTitle', __('titles.window-cleaning.renovation.ogTitle'))
@section('ogDescription', __('titles.window-cleaning.renovation.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="link">window-cleaning</x-slot>
        <x-slot name="main">@lang('windows.renovation.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('windows.renovation.breadcrumbs.current_page')</x-slot>
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
