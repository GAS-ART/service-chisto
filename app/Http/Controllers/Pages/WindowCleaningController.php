<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class WindowCleaningController extends SetLangAndViewController
{
    public function index ($locale){
        return $this->setLocaleAndView($locale, 'window-cleaning.index', []);
    }

    public function facades ($locale){
        return $this->setLocaleAndView($locale, 'window-cleaning.facades', []);
    }

    public function house ($locale){
        return $this->setLocaleAndView($locale, 'window-cleaning.house', []);
    }

    public function renovation ($locale){
        return $this->setLocaleAndView($locale, 'window-cleaning.renovation', []);
    }
}
