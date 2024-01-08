@extends('layout')

@section('title', __('titles.renovation.title'))
@section('description', __('titles.renovation.description'))
@section('ogTitle', __('titles.renovation.ogTitle'))
@section('ogDescription', __('titles.renovation.ogDescription'))

@section('content')
    <x-service :$services />
    <x-service-text>
        <x-slot name="title">@lang('renovation.title')</x-slot>
        <x-slot name="text">@lang('renovation.text')</x-slot>
    </x-service-text>
    <x-lead />
    <x-four-advantages :$fourAdvantages />
    <x-why-we :$whyWe />
    <x-questions :$questions />
    <x-slider :$slider />
@endsection
