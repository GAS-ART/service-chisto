@extends('layout')

@section('title', __('titles.dry_cleaning.furniture.title'))
@section('description', __('titles.dry_cleaning.furniture.description'))
@section('ogTitle', __('titles.dry_cleaning.furniture.ogTitle'))
@section('ogDescription', __('titles.dry_cleaning.furniture.ogDescription'))

@section('content')
    <x-breadcrumbs>
        <x-slot name="main">@lang('dry-cleaning.furniture.breadcrumbs.main_page')</x-slot>
        <x-slot name="current">@lang('dry-cleaning.furniture.breadcrumbs.current_page')</x-slot>
    </x-breadcrumbs>
    <x-service-banner :$banner />
@endsection
