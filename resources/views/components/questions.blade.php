<div class="questions">
    <div class="questions__container">
        <h2 class="questions__title">
            {{ App::isLocale('ua') ? 'Популярні питання та відповіді' : 'Популярные вопросы и ответы' }}
        </h2>
        <div class="questions__body">
            <div class="questions__img"><img src="{{ asset('img/common/question_2.webp') }}" alt=""></div>
            <div class="questions__qustion qustion">
                <div class="qustion__body">
                    @for ($i = 0; $i < count($questions); $i += 2)
                        <div class="qustion__question">@lang($questions[$i])<span class="qustion__plus-icon"><span></div>
                        <div class="qustion__answer">@lang($questions[$i + 1])</div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
