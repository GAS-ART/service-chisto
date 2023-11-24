<div class="why-we">
    <div class="why-we__container">
        <h2 class="why-we__title">
            {{ App::isLocale('ua') ? 'Чому краще звернутися до нас' : 'Почему лучше обратится к нам:' }}
        </h2>
        <ul class="why-we__list">
            @foreach ($whyWe as $text)
                <li class="why-we__list-item">@lang($text)</li>
            @endforeach
        </ul>
    </div>
</div>
