@extends('layout')

@section('title', __('titles.dry_cleaning.title'))
@section('description', __('titles.dry_cleaning.description'))
@section('ogTitle', __('titles.dry_cleaning.ogTitle'))
@section('ogDescription', __('titles.dry_cleaning.ogDescription'))

@section('content')
    <x-service :$services />
    <x-service-text>
        <x-slot name="title">@lang('dry-cleaning.title')</x-slot>
        <x-slot name="text">@lang('dry-cleaning.text')</x-slot>
    </x-service-text>
    <x-lead />
    <x-cases :$cases />
    <x-four-advantages :$fourAdvantages />
    <x-why-we :$whyWe />
    <x-questions :$questions />
@endsection
