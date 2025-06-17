@section('header')
    <header id="header" class="header">
        <div class="header__wrapper">
            <div class="header__top">
                <div class="header__container">
                    <div class="header__top-body header-contacts">
                        <div class="header-contacts__body header-top-logo">
                            <a href="{{ route('home', __('lang.current')) }}">
                                <img src="{{ asset('img/logo-min.webp') }}" alt="">
                            </a>
                        </div>
                        <div class="header-contacts__body contact-header">
                            <div class="contact-header__row">
                                <a class="contact-header__link-icon conversion" href="tel:%2B0{{ __('contacts.phone_link') }}">
                                    <svg class="contact-header__icon" xmlns="http://www.w3.org/2000/svg" width="18"
                                        height="18" viewBox="0 0 18 18" fill="none">
                                        <path
                                            d="M5.06556 7.10186C6.18556 9.30297 7.99 11.0996 10.1911 12.2274L11.9022 10.5163C12.1122 10.3063 12.4233 10.2363 12.6956 10.3296C13.5667 10.6174 14.5078 10.773 15.4722 10.773C15.9 10.773 16.25 11.123 16.25 11.5507V14.2652C16.25 14.693 15.9 15.043 15.4722 15.043C8.16889 15.043 2.25 9.12408 2.25 1.82075C2.25 1.39297 2.6 1.04297 3.02778 1.04297H5.75C6.17778 1.04297 6.52778 1.39297 6.52778 1.82075C6.52778 2.79297 6.68333 3.7263 6.97111 4.59741C7.05667 4.86964 6.99444 5.17297 6.77667 5.39075L5.06556 7.10186Z"
                                            fill="#FFCCBB" />
                                    </svg>
                                </a>
                                <a class="contact-header__link conversion"
                                    href="tel:0{{ __('contacts.phone_link') }}">@lang('contacts.phone')</a>
                            </div>
                            <div class="contact-header__row">
                                <a class="contact-header__link-icon conversion" href="mailto:@lang('contacts.email_link')">
                                    <svg class="contact-header__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M20 7.66403V15.4919C20 16.8452 19.0105 17.9419 17.7895 17.9419H6.21053C5.62426 17.9419 5.062 17.6838 4.64745 17.2243C4.23289 16.7648 4 16.1417 4 15.4919V7.66403L11.7465 12.3867C11.9044 12.4828 12.096 12.4828 12.2535 12.3867L20 7.66403ZM17.7895 3.94189C18.3665 3.94195 18.9207 4.1921 19.3335 4.6389C19.7464 5.08569 19.9853 5.69372 19.9992 6.33309L12 11.2098L4.00084 6.33263L4.00168 6.29063C4.02526 5.65888 4.2683 5.0617 4.67996 4.62396C5.09163 4.18623 5.64004 3.94184 6.21053 3.94189H17.7895Z"
                                            fill="#FFCCBB" />
                                    </svg>
                                </a>
                                <a class="contact-header__link conversion" href="mailto:@lang('contacts.email_link')">@lang('contacts.email')</a>
                            </div>
                            <div class="contact-header__row burger_icon"><span></span></div>
                        </div>
                        <div class="header-contacts__body social-header">
                            <a class="social-header__link conversion" href="@lang('contacts.instagram')">
                                <svg class="social-header__icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_452_386)">
                                        <path
                                            d="M8.25 0H3.75C1.67813 0 0 1.67813 0 3.75V8.25C0 10.3219 1.67813 12 3.75 12H8.25C10.3219 12 12 10.3219 12 8.25V3.75C12 1.67813 10.3219 0 8.25 0ZM10.875 8.25C10.875 9.69847 9.69847 10.875 8.25 10.875H3.75C2.30156 10.875 1.125 9.69847 1.125 8.25V3.75C1.125 2.30156 2.30156 1.125 3.75 1.125H8.25C9.69847 1.125 10.875 2.30156 10.875 3.75V8.25Z" />
                                        <path
                                            d="M6 3C4.34297 3 3 4.34297 3 6C3 7.657 4.34297 9 6 9C7.657 9 9 7.657 9 6C9 4.34297 7.657 3 6 3ZM6 7.875C4.96641 7.875 4.125 7.0336 4.125 6C4.125 4.96641 4.96641 4.125 6 4.125C7.0336 4.125 7.875 4.96641 7.875 6C7.875 7.0336 7.0336 7.875 6 7.875Z" />
                                        <path
                                            d="M9.22367 3.17577C9.44507 3.17577 9.62447 2.99633 9.62447 2.77499C9.62447 2.55364 9.44507 2.37421 9.22367 2.37421C9.00234 2.37421 8.82294 2.55364 8.82294 2.77499C8.82294 2.99633 9.00234 3.17577 9.22367 3.17577Z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_452_386">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a class="social-header__link conversion" class="social-header__link"
                                href="tg://resolve?domain=@lang('contacts.telegram')">
                                <svg class="social-header__icon telegram" xmlns="http://www.w3.org/2000/svg" width="14"
                                    height="12" viewBox="0 0 14 12" fill="none">
                                    <path
                                        d="M9.93684 2.61543L3.99462 6.3336L1.79483 5.64938L12.0595 1.71951C12.1004 1.70447 12.1294 1.70052 12.1466 1.69997C12.1567 1.73121 12.1694 1.80443 12.1427 1.94673L12.1355 1.98032L10.3769 10.2211C10.3527 10.326 10.3248 10.3844 10.3065 10.4126C10.3064 10.4128 10.3063 10.413 10.3062 10.4132C10.2794 10.4084 10.232 10.3943 10.1625 10.358L7.50945 8.41503L7.17145 8.1675L6.86857 8.45696L5.95289 9.33206L6.05897 7.83999L10.8739 3.51658C10.8744 3.51613 10.8749 3.51567 10.8755 3.51521C10.962 3.43824 11.1127 3.27707 11.1216 3.03645C11.1334 2.71689 10.9031 2.53527 10.731 2.47435C10.5746 2.41902 10.4184 2.43103 10.3014 2.45749C10.1771 2.4856 10.053 2.53947 9.93684 2.61543ZM1.46184 5.82093C1.4618 5.82093 1.46226 5.82037 1.46331 5.81925C1.46241 5.82038 1.46188 5.82093 1.46184 5.82093Z" />
                                </svg>
                            </a>
                            <a class="social-header__link conversion" href="viber://chat?number=%2B380{{ __('contacts.phone_link') }}">
                                <svg class="social-header__icon" xmlns="http://www.w3.org/2000/svg" width="14"
                                    height="12" viewBox="0 0 14 12" fill="none">
                                    <path
                                        d="M12.0468 6.91631C12.3932 4.00002 11.8803 2.15889 10.9551 1.32615L10.9556 1.32566C9.46242 -0.0964313 4.4195 -0.306916 2.63305 1.38954C1.83079 2.21938 1.54821 3.43728 1.51725 4.94502C1.48628 6.45325 1.44951 9.27855 4.08224 10.045H4.08466L4.08224 11.2155C4.08224 11.2155 4.06434 11.6897 4.36724 11.785C4.71369 11.8972 4.87047 11.6771 5.94805 10.39C7.74998 10.5463 9.13385 10.1882 9.29112 10.136C9.65502 10.0141 11.7138 9.7416 12.0468 6.91631ZM6.12563 9.56647C6.12563 9.56647 4.98515 10.9885 4.63047 11.3578C4.51434 11.4778 4.38708 11.4666 4.38902 11.2285C4.38902 11.0722 4.39772 9.28537 4.39772 9.28537C2.16563 8.6457 2.29725 6.23986 2.32144 4.98131C2.34563 3.72228 2.57595 2.69115 3.25531 1.99679C4.82257 0.527278 9.24372 0.855825 10.3701 1.91454C11.7472 3.13534 11.2571 6.58438 11.26 6.70195C10.9769 9.06037 9.30852 9.20985 9.00177 9.31192C8.8706 9.3555 7.65369 9.66855 6.12563 9.56647Z" />
                                    <path
                                        d="M6.75654 2.27307C6.57025 2.27307 6.57025 2.5634 6.75654 2.56581C8.20182 2.57694 9.39215 3.58436 9.40527 5.43227C9.40527 5.62727 9.69072 5.62484 9.68832 5.42985H9.6878C9.67235 3.43872 8.37267 2.2842 6.75654 2.27307Z" />
                                    <path
                                        d="M8.65797 5.12606C8.65362 5.31864 8.93862 5.32783 8.94102 5.13283C8.96472 4.03493 8.28777 3.13057 7.01568 3.03525C6.8294 3.0217 6.81004 3.31444 6.99585 3.32799C8.09907 3.4117 8.68025 4.1646 8.65797 5.12606Z" />
                                    <path
                                        d="M8.35302 6.37491C8.11399 6.23653 7.87062 6.32266 7.76998 6.45862L7.55949 6.73104C7.45255 6.86943 7.25272 6.85104 7.25272 6.85104C5.79433 6.4654 5.40433 4.93927 5.40433 4.93927C5.40433 4.93927 5.38643 4.73265 5.51998 4.62185L5.7832 4.4041C5.91481 4.29958 5.99804 4.04797 5.86401 3.80071C5.50594 3.15378 5.26546 2.93072 5.14304 2.75942C5.01433 2.59829 4.82078 2.56201 4.6195 2.67088H4.61514C4.19659 2.91572 3.73837 3.37394 3.88498 3.84572C4.13514 4.34314 4.59481 5.92878 6.05998 7.12685C6.74852 7.69342 7.8382 8.27407 8.30074 8.40817L8.30517 8.41492C8.76094 8.56687 9.20419 8.0907 9.44074 7.6596V7.65622C9.54574 7.44766 9.51094 7.25024 9.35757 7.12104C9.08562 6.85588 8.67529 6.56314 8.35302 6.37491Z" />
                                    <path
                                        d="M7.21488 4.1152C7.67988 4.1423 7.90535 4.3852 7.92957 4.88407C7.93827 5.07907 8.22132 5.06553 8.21262 4.87053C8.18165 4.21923 7.84198 3.85633 7.23036 3.82245C7.04407 3.81133 7.02666 4.10407 7.21488 4.1152Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="header-contacts__body top-menu"><button class="top-menu-btn"
                                type="button">@lang('menu.top_menu_btn')</button></div>
                        <div class="header-contacts__body lang-header @lang('lang.current')">
                            <a class="language-btn__link @lang('lang.ua')"
                                href="{{ route('locale', __('lang.ua')) }}">@lang('lang.ua_name')</a>
                            <a class="language-btn__link @lang('lang.ru')"
                                href="{{ route('locale', __('lang.ru')) }}">@lang('lang.ru_name')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__menu header__bottom-menu">
                <div class="header__container">
                    <div class="header__menu-bottom">
                        <div class="header__menu-logo">
                            <a href="{{ route('home', __('lang.current')) }}"><img src="{{ asset('img/logo.webp') }}"
                                    alt=""></a>
                        </div>
                        <div class="header__menu-menu menu-header">
                            <nav class="menu">
                                <ul class="menu-header__list">
                                    <li class="menu-header__item"><a href="{{ route('home', __('lang.current')) }}"
                                            class="menu-header__list-link">
                                            <h2>@lang('menu.main')</h2>
                                        </a></li>
                                    <li class="menu-header__item"><a
                                            href="{{ route('dry-cleaning.index', __('lang.current')) }}"
                                            class="menu-header__list-link">
                                            <h2>@lang('menu.dry_cleaning.title')</h2>
                                        </a>
                                        <ul class="menu-header__sub-list">
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('dry-cleaning.furniture', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.dry_cleaning.furniture')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('dry-cleaning.carpet', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.dry_cleaning.carpet')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('dry-cleaning.floor', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.dry_cleaning.floor')</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-header__item"><a
                                            href="{{ route('window-cleaning.index', __('lang.current')) }}"
                                            class="menu-header__list-link">
                                            <h2>@lang('menu.windows.title')</h2>
                                        </a>
                                        <ul class="menu-header__sub-list">
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('window-cleaning.facades', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.windows.1')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('window-cleaning.house', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.windows.2')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('window-cleaning.renovation', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.windows.3')</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-header__item"><a
                                            href="{{ route('spring-cleaning.index', __('lang.current')) }}"
                                            class="menu-header__list-link">
                                            <h2>@lang('menu.cleaning.title')</h2>
                                        </a>
                                        <ul class="menu-header__sub-list">
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('spring-cleaning.apartment', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.cleaning.1')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('spring-cleaning.restaurants', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.cleaning.2')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('spring-cleaning.offices', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.cleaning.3')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('spring-cleaning.industrial', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.cleaning.4')</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-header__item"><a
                                            href="{{ route('renovation.index', __('lang.current')) }}"
                                            class="menu-header__list-link">
                                            <h2>@lang('menu.renovation.title')</h2>
                                        </a>
                                        <ul class="menu-header__sub-list">
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('renovation.apartment', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.renovation.1')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('renovation.offices', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.renovation.2')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('renovation.industrial', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.renovation.3')</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-header__item no-pointer">
                                        <div class="menu-header__list-link">
                                            <h2>@lang('menu.extreme.title')</h2>
                                        </div>
                                        <ul class="menu-header__sub-list">
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('extreme.fire', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.extreme.1')</h3>
                                                </a>
                                            </li>
                                            <li class="menu-header__sub-item">
                                                <a href="{{ route('extreme.cases', __('lang.current')) }}"
                                                    class="menu-header__sub-link">
                                                    <h3>@lang('menu.extreme.2')</h3>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <div class="burger">
                <nav class="burger-menu">
                    <ul class="burger-menu-header__list">
                        <li class="burger-menu-header__item"><a href="{{ route('home', __('lang.current')) }}"
                                class="burger-menu-header__list-link">
                                <h2>@lang('menu.main')</h2>
                            </a></li>
                        <li class="burger-menu-header__item"><a
                                href="{{ route('dry-cleaning.index', __('lang.current')) }}"
                                class="burger-menu-header__list-link">
                                <h2>@lang('menu.dry_cleaning.title')</h2>
                            </a>
                            <ul class="burger-menu-header__sub-list">
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('dry-cleaning.furniture', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.dry_cleaning.furniture')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('dry-cleaning.carpet', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.dry_cleaning.carpet')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('dry-cleaning.floor', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.dry_cleaning.floor')</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="burger-menu-header__item"><a
                                href="{{ route('window-cleaning.index', __('lang.current')) }}"
                                class="burger-menu-header__list-link">
                                <h2>@lang('menu.windows.title')</h2>
                            </a>
                            <ul class="burger-menu-header__sub-list">
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('window-cleaning.facades', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.windows.1')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('window-cleaning.house', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.windows.2')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('window-cleaning.renovation', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.windows.3')</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="burger-menu-header__item"><a
                                href="{{ route('spring-cleaning.index', __('lang.current')) }}"
                                class="burger-menu-header__list-link">
                                <h2>@lang('menu.cleaning.title')</h2>
                            </a>
                            <ul class="burger-menu-header__sub-list">
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('spring-cleaning.apartment', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.cleaning.1')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('spring-cleaning.restaurants', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.cleaning.2')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('spring-cleaning.offices', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.cleaning.3')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('spring-cleaning.industrial', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.cleaning.4')</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="burger-menu-header__item"><a
                                href="{{ route('renovation.index', __('lang.current')) }}"
                                class="burger-menu-header__list-link">
                                <h2>@lang('menu.renovation.title')</h2>
                            </a>
                            <ul class="burger-menu-header__sub-list">
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('renovation.apartment', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.renovation.1')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('renovation.offices', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.renovation.2')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('renovation.industrial', __('lang.current')) }}"
                                        class="burger-menu-header__sub-link">
                                        <h3>@lang('menu.renovation.3')</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="burger-menu-header__item">
                            <div class="burger-menu-header__list-link">
                                <h2>@lang('menu.extreme.title')</h2>
                            </div>
                            <ul class="burger-menu-header__sub-list">
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('extreme.fire', __('lang.current')) }}"
                                        class="menu-header__sub-link">
                                        <h3>@lang('menu.extreme.1')</h3>
                                    </a>
                                </li>
                                <li class="burger-menu-header__sub-item">
                                    <a href="{{ route('extreme.cases', __('lang.current')) }}"
                                        class="menu-header__sub-link">
                                        <h3>@lang('menu.extreme.2')</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="header-contacts__body burger-lang @lang('lang.current')">
                    <a class="language-btn__link @lang('lang.ua')"
                        href="{{ route('locale', __('lang.ua')) }}">@lang('lang.ua_name')</a>
                    <a class="language-btn__link @lang('lang.ru')"
                        href="{{ route('locale', __('lang.ru')) }}">@lang('lang.ru_name')</a>
                </div>
            </div>


        </div>
    </header>
