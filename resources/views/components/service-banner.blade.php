<div class="service-banner">
    <picture class="service-banner__img">
        <source type="image/webp" srcset="{{ asset($banner['img']) }}" media="(min-width: 768px)">
        <source type="image/webp" srcset="{{ asset($banner['img_mobile']) }}">
        <img src="{{ asset('img/dry-cleaning/furniture/banner.webp') }}" alt="">
    </picture>
    <div class="service-banner__body">
        <h1 class="service-banner__title">@lang($banner['title'])</h1>
    </div>
</div>
