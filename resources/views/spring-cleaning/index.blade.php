@extends('layout')

@section('title', __('titles.spring-cleaning.title'))
@section('description', __('titles.spring-cleaning.description'))
@section('ogTitle', __('titles.spring-cleaning.ogTitle'))
@section('ogDescription', __('titles.spring-cleaning.ogDescription'))

@section('content')
    <x-service :$services />
    <x-service-text>
        <x-slot name="title">@lang('spring-cleaning.title')</x-slot>
        <x-slot name="text">@lang('spring-cleaning.text')</x-slot>
    </x-service-text>
    <x-lead />
    <x-cases :$cases />
    <x-four-advantages :$fourAdvantages />
    <x-why-we :$whyWe />
    <x-questions :$questions />
    <x-slider :$slider />
@endsection
