<div class="cases">
    <div class="cases__container">
        <h2 class="cases__title">@lang($cases['title'])</h2>
        <div class="cases__body">
            @foreach ($cases['item'] as $case)
                <div class="cases__item">
                    <div class="cases__item-title">@lang($case['title'])</div>
                    <div class="cases__item-text">@lang($case['text'])</div>
                </div>
            @endforeach
        </div>
        <button class="advantages__show-more show-more-btn">@lang('home.advantages.show_more')</button>
    </div>
</div>
