@extends('layout')

@section('title', __('titles.dry_cleaning.floor.title'))
@section('description', __('titles.dry_cleaning.floor.description'))
@section('ogTitle', __('titles.dry_cleaning.floor.ogTitle'))
@section('ogDescription', __('titles.dry_cleaning.floor.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="main">@lang('dry-cleaning.floor.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('dry-cleaning.floor.breadcrumbs.current_page')</x-slot>
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
