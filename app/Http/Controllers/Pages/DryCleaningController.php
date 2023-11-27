<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class DryCleaningController extends SetLangAndViewController
{
    
    public function index($locale = null)
    {   
        $services = [
            'title' => 'dry-cleaning.service.title',
            'item' => [
                [
                    'link' => 'dry-cleaning.index',
                    'img' => 'img/dry-cleaning/1.webp',
                    'title' => 'dry-cleaning.service.services.1',
                ],
                [
                    'link' => 'dry-cleaning.index',
                    'img' => 'img/dry-cleaning/2.webp',
                    'title' => 'dry-cleaning.service.services.2',
                ],
                [
                    'link' => 'dry-cleaning.index',
                    'img' => 'img/dry-cleaning/3.webp',
                    'title' => 'dry-cleaning.service.services.3',
                ],
            ],
        ];

        $cases = [
            'title' => 'dry-cleaning.cases.title',
            'item' => [
                [
                    'title' => 'dry-cleaning.cases.item.1_title',
                    'text' => 'dry-cleaning.cases.item.1_text',
                ],
                [
                    'title' => 'dry-cleaning.cases.item.2_title',
                    'text' => 'dry-cleaning.cases.item.2_text',
                ],
                [
                    'title' => 'dry-cleaning.cases.item.3_title',
                    'text' => 'dry-cleaning.cases.item.3_text',
                ],
                [
                    'title' => 'dry-cleaning.cases.item.4_title',
                    'text' => 'dry-cleaning.cases.item.4_text',
                ],
                [
                    'title' => 'dry-cleaning.cases.item.5_title',
                    'text' => 'dry-cleaning.cases.item.5_text',
                ],
                [
                    'title' => 'dry-cleaning.cases.item.6_title',
                    'text' => 'dry-cleaning.cases.item.6_text',
                ],
            ],
        ];

        $fourAdvantages = ['dry-cleaning.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "dry-cleaning.four_advantages.$i";
            $fourAdvantages[] = "dry-cleaning.four_advantages.0$i";
        }

        $whyWe = [];
        for ($i=0; $i < 7; $i++) { 
            $whyWe[] = "dry-cleaning.why_we.$i";
        }

        $questions = [];
        for ($i=1; $i < 10; $i++) { 
            $questions[] = "dry-cleaning.questions.question_$i";
            $questions[] = "dry-cleaning.questions.answer_$i";
        }

        $slider = [];
        for ($i=1; $i <= 5; $i++) { 
            $slider[] = "img/dry-cleaning/slider/$i.webp";
            $slider[] = "img/dry-cleaning/slider/${i}_ok.webp";
            $slider[] = "dry-cleaning.slider.slide_$i.name";
            $slider[] = "dry-cleaning.slider.slide_$i.review";
        }
        
        return $this->setLocaleAndView($locale, 'dry-cleaning.index', compact('services', 'cases', 'fourAdvantages', 'whyWe', 'questions', 'slider'));
    }

    public function furniture($locale = null){
        $banner = [
           'img' => 'img/dry-cleaning/furniture/banner.webp',
           'img_mobile' => 'img/dry-cleaning/furniture/banner_m.webp',
           'title' => 'dry-cleaning.furniture.title',
        ];
        return $this->setLocaleAndView($locale, 'dry-cleaning.furniture', compact('banner'));
    }
}
