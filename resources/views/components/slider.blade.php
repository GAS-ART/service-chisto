<div class="slider">
    <div class="slider__container">
        <h2 class="slider__title">
            {{ App::isLocale('ua') ? 'Фото ДО і ПІСЛЯ прибирання' : 'Фото ДО и ПОСЛЕ уборки' }}
        </h2>
        <div class="swiper slider__body">
            <div class="swiper-wrapper slider__wrapper">
                @for ($i = 0; $i < count($slider); $i += 4)
                    <div class="swiper-slide slider__slide slide">
                        <div class="slide__review">
                            <div class="slide__review-title">
                                <div class="slide__review-name">@lang($slider[$i + 2])</div>
                                <div class="slide__review-img">
                                    <img src="{{ asset('img/icons/star.webp') }}" alt="">
                                    <img src="{{ asset('img/icons/star.webp') }}" alt="">
                                    <img src="{{ asset('img/icons/star.webp') }}" alt="">
                                    <img src="{{ asset('img/icons/star.webp') }}" alt="">
                                    <img src="{{ asset('img/icons/star.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="slide__review-description">
                                <div class="slide__review-text">@lang($slider[$i + 3])</div>
                            </div>
                        </div>
                        <div class="slide__body">
                            <div class="slide__img slide__before">
                                <img src="{{ asset($slider[$i]) }}" alt="">
                            </div>
                            <div class="slide__img slide__after">
                                <img src="{{ asset($slider[$i + 1]) }}" alt="">
                            </div>
                        </div>
                        <div class="slide__logo">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </div>

                    </div>
                @endfor
            </div>
            <div class="clients__slider-btns swiper-btns-body">
                <div class="clients__slider-prev swiper-prev-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 35 34"
                        fill="none">
                        <rect x="0.5" y="0.5" width="33.5" height="33" rx="3.5" stroke="#ACACAC" />
                        <path d="M22.5 24.3915L12 17.2739L22.5 9.60889" stroke="#ACACAC" />
                    </svg>
                </div>
                <div class="clients__slider-next swiper-next-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 35 34"
                        fill="none">
                        <rect x="1" y="0.5" width="33.5" height="33" rx="3.5" stroke="#ACACAC" />
                        <path d="M12.5 24.3915L23 17.2739L12.5 9.60889" stroke="#ACACAC" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
