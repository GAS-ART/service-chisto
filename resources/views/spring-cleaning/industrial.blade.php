@extends('layout')

@section('title', __('titles.spring-cleaning.industrial.title'))
@section('description', __('titles.spring-cleaning.industrial.description'))
@section('ogTitle', __('titles.spring-cleaning.industrial.ogTitle'))
@section('ogDescription', __('titles.spring-cleaning.industrial.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="link">spring-cleaning</x-slot>
        <x-slot name="main">@lang('spring-cleaning.industrial.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('spring-cleaning.industrial.breadcrumbs.current_page')</x-slot>
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
