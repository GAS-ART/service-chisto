<div class="lead-form">
    <div class="lead-form__container">
        <div class="lead-form__body">
            <div class="lead-form__contact">
                <h2 class="lead-form__title">@lang('lead_form.title')</h2>
                <p class="lead-form__text">@lang('lead_form.text')</p>
                <form class="lead-form__form" action="{{ route('sendMainForm') }}" method="POST" name="mainForm"
                    id="mainForm" class="@lang('lang.current')">
                    <div class="lead-form__loading">
                        <img src="{{ asset('img/load.gif') }}" alt="">
                    </div>
                    @csrf
                    <input name="page" type="hidden" value="{{ url()->current() }}">
                    <div class="lead-form__form-item">
                        <label for="name">@lang('popup.name')</label>
                        <input id="name" name="name" type="text" placeholder="@lang('popup.name_placeholder')">
                        <p class="error-name"></p>
                    </div>
                    <div class="lead-form__form-item select">
                        <label for="form-select">@lang('common.select.popup')</label>
                        <select name="service" id="form-select">
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
                    <div class="lead-form__form-item">
                        <label for="phone">@lang('popup.phone')</label>
                        <input id="phone" name="phone" type="text" placeholder="@lang('popup.phone_placeholder')">
                        <p class="error-phone"></p>
                    </div>
                    <button class="lead-form__btn" type="submit">@lang('lead_form.btn')</button>
                </form>
            </div>
            <div class="lead-form__img">
                <img src="{{ asset('img/lead_form/1.webp') }}" alt="">
            </div>
        </div>
    </div>
</div>
