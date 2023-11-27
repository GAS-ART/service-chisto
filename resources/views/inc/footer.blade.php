@section('footer')
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__wrapper">
                <div class="footer__contatcs">
                    <div class="footer__contatcs-body">
                        <div class="footer__contatcs-item footer__contatcs-logo">
                            <a href="{{ route('home', __('lang.current')) }}">
                                <img src="{{ asset('img/logo.webp ') }}" alt="">
                            </a>
                        </div>
                        <div class="footer__contatcs-item footer__contatcs-phone">
                            <a href="tel:%2B0{{ __('contacts.phone_link') }}">
                                <svg class="footer__contacts-icon" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 18 18" fill="none">
                                    <path
                                        d="M5.06556 7.10186C6.18556 9.30297 7.99 11.0996 10.1911 12.2274L11.9022 10.5163C12.1122 10.3063 12.4233 10.2363 12.6956 10.3296C13.5667 10.6174 14.5078 10.773 15.4722 10.773C15.9 10.773 16.25 11.123 16.25 11.5507V14.2652C16.25 14.693 15.9 15.043 15.4722 15.043C8.16889 15.043 2.25 9.12408 2.25 1.82075C2.25 1.39297 2.6 1.04297 3.02778 1.04297H5.75C6.17778 1.04297 6.52778 1.39297 6.52778 1.82075C6.52778 2.79297 6.68333 3.7263 6.97111 4.59741C7.05667 4.86964 6.99444 5.17297 6.77667 5.39075L5.06556 7.10186Z"
                                        fill="#FFFFFF" />
                                </svg>
                            </a>
                            <a href="tel:%2B0{{ __('contacts.phone_link') }}">@lang('contacts.phone')</a>
                        </div>
                        <div class="footer__contatcs-social">
                            <a href="@lang('contacts.instagram')" class="footer__contatcs-social-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M11 0H5C2.2375 0 0 2.2375 0 5V11C0 13.7625 2.2375 16 5 16H11C13.7625 16 16 13.7625 16 11V5C16 2.2375 13.7625 0 11 0ZM14.5 11C14.5 12.9313 12.9313 14.5 11 14.5H5C3.06875 14.5 1.5 12.9313 1.5 11V5C1.5 3.06875 3.06875 1.5 5 1.5H11C12.9313 1.5 14.5 3.06875 14.5 5V11Z"
                                        fill="#05252C" />
                                    <path
                                        d="M8 4C5.79062 4 4 5.79062 4 8C4 10.2093 5.79062 12 8 12C10.2093 12 12 10.2093 12 8C12 5.79062 10.2093 4 8 4ZM8 10.5C6.62188 10.5 5.5 9.37813 5.5 8C5.5 6.62188 6.62188 5.5 8 5.5C9.37813 5.5 10.5 6.62188 10.5 8C10.5 9.37813 9.37813 10.5 8 10.5Z"
                                        fill="#05252C" />
                                    <path
                                        d="M12.2982 4.23427C12.5934 4.23427 12.8326 3.99503 12.8326 3.6999C12.8326 3.40477 12.5934 3.16553 12.2982 3.16553C12.0031 3.16553 11.7639 3.40477 11.7639 3.6999C11.7639 3.99503 12.0031 4.23427 12.2982 4.23427Z"
                                        fill="#05252C" />
                                </svg>
                            </a>
                            <a href="tg://resolve?domain=@lang('contacts.telegram')" class="footer__contatcs-social-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                    fill="none">
                                    <path
                                        d="M7.09942 10.1375L6.84229 13.7543C7.21018 13.7543 7.36951 13.5963 7.56058 13.4065L9.28538 11.7581L12.8593 14.3755C13.5148 14.7407 13.9766 14.5484 14.1535 13.7725L16.4993 2.77981L16.5 2.77916C16.7079 1.81021 16.1496 1.43131 15.511 1.66902L1.72165 6.94835C0.780548 7.31365 0.794796 7.83828 1.56166 8.07598L5.08705 9.17252L13.2758 4.04864C13.6612 3.79345 14.0116 3.93464 13.7233 4.18983L7.09942 10.1375Z"
                                        fill="#05252C" />
                                </svg>
                            </a>
                            <a href="viber://chat?number=%2B380{{ __('contacts.phone_link') }}"
                                class="footer__contatcs-social-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                    fill="none">
                                    <path
                                        d="M15.7289 9.22175C16.1908 5.33336 15.5069 2.87852 14.2734 1.7682L14.274 1.76755C12.2831 -0.128575 5.55926 -0.409221 3.17732 1.85272C2.10764 2.95917 1.73087 4.58304 1.68958 6.59336C1.64829 8.60433 1.59926 12.3714 5.10958 13.3934H5.1128L5.10958 14.954C5.10958 14.954 5.08571 15.5863 5.48958 15.7134C5.95151 15.863 6.16055 15.5695 7.59732 13.8534C9.9999 14.0618 11.845 13.5843 12.0547 13.5147C12.5399 13.3521 15.285 12.9888 15.7289 9.22175ZM7.83409 12.7553C7.83409 12.7553 6.31345 14.6514 5.84055 15.1437C5.68571 15.3037 5.51603 15.2888 5.51861 14.9714C5.51861 14.763 5.53022 12.3805 5.53022 12.3805C2.55409 11.5276 2.72958 8.31981 2.76184 6.64175C2.79409 4.96304 3.10119 3.5882 4.007 2.66239C6.09668 0.703038 11.9915 1.1411 13.4934 2.55272C15.3295 4.18046 14.676 8.77917 14.6799 8.93594C14.3024 12.0805 12.0779 12.2798 11.6689 12.4159C11.494 12.474 9.87151 12.8914 7.83409 12.7553Z"
                                        fill="#05252C" />
                                    <path
                                        d="M8.6753 3.03076C8.42692 3.03076 8.42692 3.41786 8.6753 3.42108C10.6023 3.43592 12.1894 4.77915 12.2069 7.24302C12.2069 7.50302 12.5875 7.49979 12.5843 7.2398H12.5836C12.563 4.58496 10.8301 3.0456 8.6753 3.03076Z"
                                        fill="#05252C" />
                                    <path
                                        d="M11.2106 6.83474C11.2048 7.09151 11.5847 7.10377 11.5879 6.84377C11.6195 5.3799 10.717 4.17409 9.02083 4.04699C8.77245 4.02893 8.74664 4.41925 8.99438 4.43732C10.4654 4.54893 11.2403 5.5528 11.2106 6.83474Z"
                                        fill="#05252C" />
                                    <path
                                        d="M10.804 8.49988C10.4853 8.31537 10.1608 8.43021 10.0266 8.6115L9.74591 8.97472C9.60333 9.15924 9.33688 9.13472 9.33688 9.13472C7.39237 8.62053 6.87237 6.58569 6.87237 6.58569C6.87237 6.58569 6.8485 6.3102 7.02656 6.16246L7.37753 5.87214C7.55301 5.73278 7.66398 5.3973 7.48527 5.06762C7.00785 4.20504 6.68721 3.90762 6.52398 3.67923C6.35237 3.46439 6.0943 3.41601 5.82592 3.56117H5.82011C5.26205 3.88762 4.65108 4.49859 4.84656 5.12762C5.18011 5.79085 5.79301 7.90504 7.74656 9.50247C8.66462 10.2579 10.1175 11.0321 10.7343 11.2109L10.7402 11.2199C11.3479 11.4225 11.9389 10.7876 12.2543 10.2128V10.2083C12.3943 9.93021 12.3479 9.66698 12.1434 9.49472C11.7808 9.14117 11.2337 8.75085 10.804 8.49988Z"
                                        fill="#05252C" />
                                    <path
                                        d="M9.28643 5.48693C9.90643 5.52306 10.2071 5.84693 10.2394 6.51209C10.251 6.77209 10.6284 6.75403 10.6168 6.49403C10.5755 5.62564 10.1226 5.14177 9.30707 5.0966C9.05868 5.08177 9.03546 5.47209 9.28643 5.48693Z"
                                        fill="#05252C" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer__contatcs-item footer__contatcs-email">
                            <a href="mailto:@lang('contacts.email_link')">
                                <svg class="footer__contacts-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M20 7.66403V15.4919C20 16.8452 19.0105 17.9419 17.7895 17.9419H6.21053C5.62426 17.9419 5.062 17.6838 4.64745 17.2243C4.23289 16.7648 4 16.1417 4 15.4919V7.66403L11.7465 12.3867C11.9044 12.4828 12.096 12.4828 12.2535 12.3867L20 7.66403ZM17.7895 3.94189C18.3665 3.94195 18.9207 4.1921 19.3335 4.6389C19.7464 5.08569 19.9853 5.69372 19.9992 6.33309L12 11.2098L4.00084 6.33263L4.00168 6.29063C4.02526 5.65888 4.2683 5.0617 4.67996 4.62396C5.09163 4.18623 5.64004 3.94184 6.21053 3.94189H17.7895Z"
                                        fill="#FFFFFF" />
                                </svg>
                            </a>
                            <a href="mailto:@lang('contacts.email_link')">@lang('contacts.email')</a>
                        </div>
                        <div class="footer__contatcs-item footer__contatcs-address">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M20 8.61538C20 12.8292 12 23 12 23C12 23 4 12.8292 4 8.61538C4 6.59566 4.84285 4.65866 6.34315 3.23049C7.84344 1.80233 9.87827 1 12 1C14.1217 1 16.1566 1.80233 17.6569 3.23049C19.1571 4.65866 20 6.59566 20 8.61538Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 11.1536C13.4728 11.1536 14.6667 10.0171 14.6667 8.61512C14.6667 7.21317 13.4728 6.07666 12 6.07666C10.5273 6.07666 9.33337 7.21317 9.33337 8.61512C9.33337 10.0171 10.5273 11.1536 12 11.1536Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>@lang('contacts.contact')</span>
                        </div>
                    </div>
                </div>
                <nav class="footer__menu">
                    <ul class="footer__menu-list">
                        <li class="footer__menu-li"><a href="{{ route('dry-cleaning.index', __('lang.current')) }}"
                                class="footer__menu-link">@lang('menu.dry_cleaning.title')</a>
                            <ul class="footer__menu-sub-list">
                                <li class="footer__menu-sub-li"><a
                                        href="{{ route('dry-cleaning.furniture', __('lang.current')) }}"
                                        class="footer__menu-sub-link">@lang('menu.dry_cleaning.furniture')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.dry_cleaning.carpet')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.dry_cleaning.floor')</a></li>
                            </ul>
                        </li>
                        <li class="footer__menu-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                class="footer__menu-link">@lang('menu.windows.title')</a>
                            <ul class="footer__menu-sub-list">
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.windows.1')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.windows.2')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.windows.3')</a></li>
                            </ul>
                        </li>
                        <li class="footer__menu-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                class="footer__menu-link">@lang('menu.cleaning.title')</a>
                            <ul class="footer__menu-sub-list">
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.cleaning.1')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.cleaning.2')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.cleaning.3')</a></li>
                            </ul>
                        </li>
                        <li class="footer__menu-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                class="footer__menu-link">@lang('menu.renovation.title')</a>
                            <ul class="footer__menu-sub-list">
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.renovation.1')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.renovation.2')</a></li>
                                <li class="footer__menu-sub-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                        class="footer__menu-sub-link">@lang('menu.renovation.3')</a></li>
                            </ul>
                        </li>
                        <li class="footer__menu-li"><a href="#{{-- {{ route('', __('lang.current')) }} --}}"
                                class="footer__menu-link">@lang('menu.extreme')</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
