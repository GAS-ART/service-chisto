<div class="recommend">
    <div class="recommend__container">
        <h2 class="recommend__title">@lang($recommend['title'])</h2>
        <div class="recommend__body">
            @foreach ($recommend['content'] as $item)
                <div class="recommend__item">
                    <div class="recommend__item-img"><img src="{{ asset($item['img']) }}" alt=""></div>
                    <h3 class="recommend__item-title">@lang($item['title'])</h3>
                    <p class="recommend__item-text">@lang($item['text'])</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
