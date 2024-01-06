@extends('layout')

@section('title', __('titles.renovation.industrial.title'))
@section('description', __('titles.renovation.industrial.description'))
@section('ogTitle', __('titles.renovation.industrial.ogTitle'))
@section('ogDescription', __('titles.renovation.industrial.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="link">renovation</x-slot>
        <x-slot name="main">@lang('renovation.industrial.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('renovation.industrial.breadcrumbs.current_page')</x-slot>
    </x-breadcrumbs>
    <x-service-banner :$banner />
    {{-- <x-stages :$stages />
    <x-recommend :$recommend />
    <x-four-advantages :$fourAdvantages />
    <x-type-clients :$typeClients />
    <x-lead>
        margin: 0;
    </x-lead> --}}
@endsection
