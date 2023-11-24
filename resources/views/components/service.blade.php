<div class="service">
    <div class="service__container">
        <h2 class="service__title">@lang($services['title'])</h2>
        <div class="service__body">
            @foreach ($services['item'] as $service)
                <a href="{{ route($service['link'], __('lang.current')) }}" class="service__item">
                    <img src="{{ asset($service['img']) }}" alt="">
                    <div class="service__item-body-title">
                        <h2 class="service__item-title">@lang($service['title'])</h2>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
