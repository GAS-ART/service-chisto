<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SpringCleaningController extends SetLangAndViewController
{
    public function index ($locale){
        return $this->setLocaleAndView($locale, 'spring-cleaning.index', []);
    }

    public function apartment ($locale){
        return $this->setLocaleAndView($locale, 'spring-cleaning.apartment', []);
    }

    public function restaurants ($locale){
        return $this->setLocaleAndView($locale, 'spring-cleaning.restaurants', []);
    }

    public function offices ($locale){
        return $this->setLocaleAndView($locale, 'spring-cleaning.offices', []);
    }

    public function industrial ($locale){
        return $this->setLocaleAndView($locale, 'spring-cleaning.industrial', []);
    }
}
