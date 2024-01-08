<div class="stages">
    <div class="stages__container">
        <h2 class="stages__title">@lang($stages['title'])</h2>
        <p class="stages__text">@lang($stages['text'])</p>
        <div class="stages__body">
            @foreach ($stages['content'] as $stage)
                <div class="stages__stage {{ $loop->last && $loop->iteration % 2 !== 0 ? 'centre' : '' }}">
                    <div class="stages__stage-img"><img src="{{ asset($stage['img']) }}" alt=""></div>
                    <h3 class="stages__stage-title">@lang($stage['title'])</h3>
                    <p class="stages__stage-text">@lang($stage['text'])</p>
                </div>
            @endforeach
        </div>
        <button class="advantages__show-more show-more-btn show-more-btn-color">@lang('home.advantages.show_more')</button>
    </div>
</div>
