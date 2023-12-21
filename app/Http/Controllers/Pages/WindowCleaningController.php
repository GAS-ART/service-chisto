<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class WindowCleaningController extends SetLangAndViewController
{
    public function index ($locale){

        $services = [
            'title' => 'windows.service.title',
            'item' => [
                [
                    'link' => 'window-cleaning.facades',
                    'img' => 'img/windows/1.webp',
                    'title' => 'windows.service.services.1',
                ],
                [
                    'link' => 'window-cleaning.house',
                    'img' => 'img/windows/2.webp',
                    'title' => 'windows.service.services.2',
                ],
                [
                    'link' => 'window-cleaning.renovation',
                    'img' => 'img/windows/3.webp',
                    'title' => 'windows.service.services.3',
                ],
            ],
        ];

        $cases = [
            'title' => 'windows.cases.title',
            'item' => [
                [
                    'title' => 'windows.cases.item.1_title',
                    'text' => 'windows.cases.item.1_text',
                ],
                [
                    'title' => 'windows.cases.item.2_title',
                    'text' => 'windows.cases.item.2_text',
                ],
                [
                    'title' => 'windows.cases.item.3_title',
                    'text' => 'windows.cases.item.3_text',
                ],
                [
                    'title' => 'windows.cases.item.4_title',
                    'text' => 'windows.cases.item.4_text',
                ],
                [
                    'title' => 'windows.cases.item.5_title',
                    'text' => 'windows.cases.item.5_text',
                ],
                [
                    'title' => 'windows.cases.item.6_title',
                    'text' => 'windows.cases.item.6_text',
                ],
                [
                    'title' => 'windows.cases.item.7_title',
                    'text' => 'windows.cases.item.7_text',
                ],
            ],
        ];

        $fourAdvantages = ['windows.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "windows.four_advantages.$i";
            $fourAdvantages[] = "windows.four_advantages.0$i";
        }

        $whyWe = [];
        for ($i=0; $i < 7; $i++) { 
            $whyWe[] = "windows.why_we.$i";
        }

        $questions = [];
        for ($i=1; $i < 6; $i++) { 
            $questions[] = "windows.questions.question_$i";
            $questions[] = "windows.questions.answer_$i";
        }

        $slider = [];
        for ($i=1; $i <= 5; $i++) { 
            $slider[] = "img/windows/slider/$i.webp";
            $slider[] = "img/windows/slider/${i}_ok.webp";
            $slider[] = "windows.slider.slide_$i.name";
            $slider[] = "windows.slider.slide_$i.review";
        }

        return $this->setLocaleAndView($locale, 'window-cleaning.index', compact('services', 'cases', 'fourAdvantages', 'whyWe', 'questions', 'slider'));
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
