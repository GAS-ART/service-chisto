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

        $banner = [
            'img' => 'img/windows/facades/banner.webp',
            'title' => 'windows.facades.title',
        ];

        $stages = [
            'title' => 'windows.facades.stages.title',
            'text' => 'windows.facades.stages.text',
            'content' => [],
        ];
        for($i=1; $i<8; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/windows/facades/stages/$i.webp",'title' => "windows.facades.stages.stage_$i.title", 'text' =>"windows.facades.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'windows.facades.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/windows/facades/recommend/$i.webp",'title' => "windows.facades.recommend.item_$i.title", 'text' => "windows.facades.recommend.item_$i.text"];
        }

        $fourAdvantages = ['windows.facades.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "windows.facades.four_advantages.$i";
            $fourAdvantages[] = "windows.facades.four_advantages.0$i";
        }

        $typeClients = ['title' => 'windows.facades.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/windows/facades/clients/$i.webp",'title' => "windows.facades.clients.client_$i.title", 'text' => "windows.facades.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'window-cleaning.facades', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function house ($locale){

        $banner = [
            'img' => 'img/windows/house/banner.webp',
            'title' => 'windows.house.title',
        ];

        $stages = [
            'title' => 'windows.house.stages.title',
            'text' => 'windows.house.stages.text',
            'content' => [],
        ];
        for($i=1; $i<9; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/windows/house/stages/$i.webp",'title' => "windows.house.stages.stage_$i.title", 'text' =>"windows.house.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'windows.house.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/windows/house/recommend/$i.webp",'title' => "windows.house.recommend.item_$i.title", 'text' => "windows.house.recommend.item_$i.text"];
        }

        $fourAdvantages = ['windows.house.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "windows.house.four_advantages.$i";
            $fourAdvantages[] = "windows.house.four_advantages.0$i";
        }

        $typeClients = ['title' => 'windows.house.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/windows/house/clients/$i.webp",'title' => "windows.house.clients.client_$i.title", 'text' => "windows.house.clients.client_$i.text"];
        }


        return $this->setLocaleAndView($locale, 'window-cleaning.house', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function renovation ($locale){
        $banner = [
            'img' => 'img/windows/renovation/banner.webp',
            'title' => 'windows.renovation.title',
        ];
        return $this->setLocaleAndView($locale, 'window-cleaning.renovation', compact('banner'));
    }
}
