@extends('layout')

@section('title', __('titles.dry_cleaning.furniture.title'))
@section('description', __('titles.dry_cleaning.furniture.description'))
@section('ogTitle', __('titles.dry_cleaning.furniture.ogTitle'))
@section('ogDescription', __('titles.dry_cleaning.furniture.ogDescription'))

@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs__container">
            <nav class="breadcrumbs__body">
                <span class="breadcrumbs__item">@lang('breadcrumbs.dry_cleaning.title')</span>
                <span> > </span>
                <span class="breadcrumbs__item">@lang('breadcrumbs.dry_cleaning.furniture')</span>
            </nav>
        </div>
    </div>
@endsection
