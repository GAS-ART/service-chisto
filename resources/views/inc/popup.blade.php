@section('popup')
    {{--     <div id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <a href="#" class="popup__close close-popup">X</a>
                <div class="popup__title">
                    <h4>@lang('popup.call_back')</h4>
                </div>
                <div class="popup__text">
                    <form class="popup__form" id="send-form" name="popupForm" method="post"
                        action="{{ route('sendMainForm') }}" autocomplete="on">
                        @csrf
                        <div class="contacts-form__item data popup-data">
                            <input class="data__text-field" type="text" name="name" placeholder="@lang('popup.name')">
                            <p class="error-popup name-error"></p>
                        </div>
                        <div class="contacts__phone popup-phone">
                            <input class="phone" type="text" name="phone" placeholder="@lang('popup.phone')">
                            <p class="error-popup phone-error"></p>
                        </div>
                        <div class="popup__button">
                            <div class="button">
                                <input class="submit _conversion" type="submit" value="ЗАКАЗАТЬ ЗВОНОК">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="popup__confirm confirm">
                    <div class="popup__title">
                        <h4><span>@lang('popup.success')</h4>
                    </div>
                    <div class="confirm__button">
                        <div class="button">
                            <input id="confirmButtom" class="submit close-popup" type="button" value="ОК">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <div class="popup__loading">
                    <img src="{{ asset('img/load.gif') }}" alt="">
                </div>
                <button class="popup__close close-popup"><span></span><span></span></button>
                <div class="popup__row">
                    <div class="popup__form">
                        <div class="popup__form-body">
                            <div class="popup__title">
                                <h4>@lang('popup.title')</h4>
                            </div>
                            <div class="popup__text">
                                <form action="{{ route('sendMainForm') }}" method="POST" name="mainForm" id="mainForm"
                                    class="@lang('lang.current')">
                                    @csrf
                                    <div class="popup__item">
                                        <label for="name">@lang('popup.name')</label>
                                        <input id="name" name="name" type="text" placeholder="@lang('popup.name_placeholder')">
                                        <p class="error-name"></p>
                                    </div>
                                    <div class="popup__item">
                                        <label for="phone">@lang('popup.phone')</label>
                                        <input id="phone" name="phone" type="text" placeholder="@lang('popup.phone_placeholder')">
                                        <p class="error-phone"></p>
                                    </div>
                                    <button class="popup__btn" type="submit">@lang('popup.btn')</button>
                                </form>
                            </div>
                        </div>
                        <div class="success">
                            <h4>@lang('popup.success.title')</h4>
                            <button class="popup__button">
                                @lang('popup.success.btn')
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
