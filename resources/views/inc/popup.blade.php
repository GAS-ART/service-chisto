@section('popup')
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
                                    <input name="page" type="hidden" value="{{url()->current()}}">
                                    <div class="popup__item">
                                        <label for="name">@lang('popup.name')</label>
                                        <input id="name" name="name" type="text"
                                               placeholder="@lang('popup.name_placeholder')">
                                        <p class="error-name"></p>
                                    </div>
                                    <div class="popup__item">
                                        <label for="phone">@lang('popup.phone')</label>
                                        <input id="phone" name="phone" type="text"
                                               placeholder="@lang('popup.phone_placeholder')">
                                        <p class="error-phone"></p>
                                    </div>
                                    <div class="popup__item">
                                        <label for="popup-select">@lang('common.select.popup')</label>
                                        <select name="service" id="popup-select">
                                            <option hidden disabled selected value="">@lang('common.select.placeholder')</option>
                                            <option value="Хімчистка">@lang('common.select.dry_cleaning')</option>
                                            <option value="Мийка вікон">@lang('common.select.windows')</option>
                                            <option value="Приберання">@lang('common.select.cleaning')</option>
                                            <option value="Післяремонтне прибирання">@lang('common.select.renovation')</option>
                                            <option value="Екстримальне прибирання">@lang('common.select.extreme')</option>
                                            <option value="Інше питання">@lang('common.select.other')</option>
                                        </select>
                                        <p class="error-select"></p>
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
