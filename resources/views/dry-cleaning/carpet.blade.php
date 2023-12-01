@extends('layout')

@section('title', __('titles.dry_cleaning.carpet.title'))
@section('description', __('titles.dry_cleaning.carpet.description'))
@section('ogTitle', __('titles.dry_cleaning.carpet.ogTitle'))
@section('ogDescription', __('titles.dry_cleaning.carpet.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="main">@lang('dry-cleaning.carpet.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('dry-cleaning.carpet.breadcrumbs.current_page')</x-slot>
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
