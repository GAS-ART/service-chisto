@extends('layout')

@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
{{-- @section('mainPopupPayload', 'Главная страница (' . url()->current() . ')') --}}

@section('content')

<div class="test">@lang('home.test')</div>
<br><br>
<div class="langs">
  <div class="lang">
    <a class="language-btn__link @lang('lang.current')" href="{{ route('locale', __('lang.current')) }}">@lang('lang.current')</a>
  </div>
  <br>
  <div class="lang">
    <a class="language-btn__link @lang('lang.another')" href="{{ route('locale', __('lang.another')) }}">@lang('lang.another')</a>
  </div>
</div>

@endsection