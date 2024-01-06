@extends('layout')

@section('title', __('titles.extreme-cleaning.fire.title'))
@section('description', __('titles.extreme-cleaning.fire.description'))
@section('ogTitle', __('titles.extreme-cleaning.fire.ogTitle'))
@section('ogDescription', __('titles.extreme-cleaning.fire.ogDescription'))

@section('content')
    {{--     <x-breadcrumbs>
        <x-slot name="link">extreme-cleaning</x-slot>
        <x-slot name="main">@lang('extreme-cleaning.fire.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('extreme-cleaning.fire.breadcrumbs.current_page')</x-slot>
    </x-breadcrumbs> --}}
    <x-service-banner :$banner />
    {{-- <x-stages :$stages />
    <x-recommend :$recommend />
    <x-four-advantages :$fourAdvantages />
    <x-type-clients :$typeClients />
    <x-lead>
        margin: 0;
    </x-lead> --}}
@endsection
