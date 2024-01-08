@extends('layout')

@section('title', __('titles.renovation.offices.title'))
@section('description', __('titles.renovation.offices.description'))
@section('ogTitle', __('titles.renovation.offices.ogTitle'))
@section('ogDescription', __('titles.renovation.offices.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="link">renovation</x-slot>
        <x-slot name="main">@lang('renovation.offices.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('renovation.offices.breadcrumbs.current_page')</x-slot>
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
