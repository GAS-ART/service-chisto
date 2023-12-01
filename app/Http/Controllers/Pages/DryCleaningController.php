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
                    'link' => 'dry-cleaning.furniture',
                    'img' => 'img/dry-cleaning/1.webp',
                    'title' => 'dry-cleaning.service.services.1',
                ],
                [
                    'link' => 'dry-cleaning.carpet',
                    'img' => 'img/dry-cleaning/2.webp',
                    'title' => 'dry-cleaning.service.services.2',
                ],
                [
                    'link' => 'dry-cleaning.floor',
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

    public function furniture($locale){
        $banner = [
            'img' => 'img/dry-cleaning/furniture/banner.webp',
            'img_mobile' => 'img/dry-cleaning/furniture/banner_m.webp',
            'title' => 'dry-cleaning.furniture.title',
        ];

        $stages = [
            'title' => 'dry-cleaning.furniture.stages.title',
            'text' => 'dry-cleaning.furniture.stages.text',
            'content' => [],
        ];
        for($i=1; $i<9; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/dry-cleaning/furniture/stages/$i.webp",'title' => "dry-cleaning.furniture.stages.stage_$i.title", 'text' =>"dry-cleaning.furniture.stages.stage_$i.text"]; 
        }

        $fourAdvantages = ['dry-cleaning.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "dry-cleaning.furniture.four_advantages.$i";
            $fourAdvantages[] = "dry-cleaning.furniture.four_advantages.0$i";
        }

        $typeClients = ['title' => 'dry-cleaning.furniture.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/dry-cleaning/furniture/clients/$i.webp",'title' => "dry-cleaning.furniture.clients.client_$i.title", 'text' => "dry-cleaning.furniture.clients.client_$i.text"];
        }

        $recommend = ['title' => 'dry-cleaning.furniture.recommend.title', 'content' => []];

        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/dry-cleaning/furniture/recommend/$i.webp",'title' => "dry-cleaning.furniture.recommend.item_$i.title", 'text' => "dry-cleaning.furniture.recommend.item_$i.text"];
        }


        return $this->setLocaleAndView($locale, 'dry-cleaning.furniture', compact('banner', 'stages', 'fourAdvantages', 'typeClients', 'recommend'));
    }

    public function carpet($locale){

        $banner = [
            'img' => 'img/dry-cleaning/carpet/banner.webp',
            'img_mobile' => 'img/dry-cleaning/carpet/banner_m.webp',
            'title' => 'dry-cleaning.carpet.title',
        ];

        $stages = [
            'title' => 'dry-cleaning.carpet.stages.title',
            'text' => 'dry-cleaning.carpet.stages.text',
            'content' => [],
        ];
        for($i=1; $i<7; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/dry-cleaning/carpet/stages/$i.webp",'title' => "dry-cleaning.carpet.stages.stage_$i.title", 'text' =>"dry-cleaning.carpet.stages.stage_$i.text"]; 
        }

        $recommend = [
            'title' => 'dry-cleaning.carpet.recommend.title', 
            'text' => 'dry-cleaning.carpet.recommend.text', 
            'sub_title' => 'dry-cleaning.carpet.recommend.sub_title', 
            'content' => []
        ];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/dry-cleaning/carpet/recommend/$i.webp",'title' => "dry-cleaning.carpet.recommend.item_$i.title", 'text' => "dry-cleaning.carpet.recommend.item_$i.text"];
        }

        $fourAdvantages = ['dry-cleaning.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "dry-cleaning.carpet.four_advantages.$i";
            $fourAdvantages[] = "dry-cleaning.carpet.four_advantages.0$i";
        }

        $typeClients = ['title' => 'dry-cleaning.carpet.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/dry-cleaning/carpet/clients/$i.webp",'title' => "dry-cleaning.carpet.clients.client_$i.title", 'text' => "dry-cleaning.carpet.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'dry-cleaning.carpet', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function floor($locale){

        $banner = [
            'img' => 'img/dry-cleaning/floor/banner.webp',
            'img_mobile' => 'img/dry-cleaning/floor/banner_m.webp',
            'title' => 'dry-cleaning.floor.title',
        ];

        $stages = [
            'title' => 'dry-cleaning.floor.stages.title',
            'text' => 'dry-cleaning.floor.stages.text',
            'content' => [],
        ];
        for($i=1; $i<7; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/dry-cleaning/floor/stages/$i.webp",'title' => "dry-cleaning.floor.stages.stage_$i.title", 'text' =>"dry-cleaning.floor.stages.stage_$i.text"]; 
        }

        $recommend = [
            'title' => 'dry-cleaning.floor.recommend.title', 
            'content' => []
        ];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/dry-cleaning/floor/recommend/$i.webp",'title' => "dry-cleaning.floor.recommend.item_$i.title", 'text' => "dry-cleaning.floor.recommend.item_$i.text"];
        }

        $fourAdvantages = ['dry-cleaning.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "dry-cleaning.floor.four_advantages.$i";
            $fourAdvantages[] = "dry-cleaning.floor.four_advantages.0$i";
        }

        $typeClients = ['title' => 'dry-cleaning.floor.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/dry-cleaning/floor/clients/$i.webp",'title' => "dry-cleaning.floor.clients.client_$i.title", 'text' => "dry-cleaning.floor.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'dry-cleaning.floor', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }
    
}
