@extends('layout')

@section('title', __('titles.window-cleaning.title'))
@section('description', __('titles.window-cleaning.description'))
@section('ogTitle', __('titles.window-cleaning.ogTitle'))
@section('ogDescription', __('titles.window-cleaning.ogDescription'))

@section('content')
    <x-service :$services />
    <x-service-text>
        <x-slot name="title">@lang('windows.title')</x-slot>
        <x-slot name="text">@lang('windows.text')</x-slot>
    </x-service-text>
    <x-lead />
    <x-cases :$cases />
    <x-four-advantages :$fourAdvantages />
    <x-why-we :$whyWe />
    <x-questions :$questions />
    <x-slider :$slider />
@endsection
