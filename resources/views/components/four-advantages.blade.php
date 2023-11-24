<div class="four-advantages">
    <div class="four-advantages__container">
        <h2 class="four-advantages__title">@lang($fourAdvantages[0])</h2>
        <div class="four-advantages__body">
            @for ($i = 1; $i < count($fourAdvantages); $i += 2)
                <div class="four-advantages__item">
                    <div class="four-advantages__text">@lang($fourAdvantages[$i])</div>
                    <div class="four-advantages__number">@lang($fourAdvantages[$i + 1])</div>
                </div>
            @endfor
        </div>
    </div>
</div>
