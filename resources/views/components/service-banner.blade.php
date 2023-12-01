<div class="service-banner">
    <div class="service-banner__img">
        <{{-- source type="image/webp" srcset="{{ asset($banner['img']) }}" media="(min-width: 768px)">
        <source type="image/webp" srcset="{{ asset($banner['img_mobile']) }}"> --}} <img src="{{ asset($banner['img']) }}" alt="">
    </div>
    <div class="service-banner__body">
        <h1 class="service-banner__title">@lang($banner['title'])</h1>
    </div>
</div>
