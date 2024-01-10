<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class RenavationController extends SetLangAndViewController
{
    public function index ($locale){

        $services = [
            'title' => 'renovation.service.title',
            'item' => [
                [
                    'link' => 'renovation.apartment',
                    'img' => 'img/renovation/1.webp',
                    'title' => 'renovation.service.services.1',
                ],
                [
                    'link' => 'renovation.offices',
                    'img' => 'img/renovation/2.webp',
                    'title' => 'renovation.service.services.2',
                ],
                [
                    'link' => 'renovation.industrial',
                    'img' => 'img/renovation/3.webp',
                    'title' => 'renovation.service.services.3',
                ],
            ],
        ];

        $cases = [
            'title' => 'renovation.cases.title',
            'item' => [
                [
                    'title' => 'renovation.cases.item.1_title',
                    'text' => 'renovation.cases.item.1_text',
                ],
                [
                    'title' => 'renovation.cases.item.2_title',
                    'text' => 'renovation.cases.item.2_text',
                ],
                [
                    'title' => 'renovation.cases.item.3_title',
                    'text' => 'renovation.cases.item.3_text',
                ],
                [
                    'title' => 'renovation.cases.item.4_title',
                    'text' => 'renovation.cases.item.4_text',
                ],
                [
                    'title' => 'renovation.cases.item.5_title',
                    'text' => 'renovation.cases.item.5_text',
                ],
                [
                    'title' => 'renovation.cases.item.6_title',
                    'text' => 'renovation.cases.item.6_text',
                ],
            ],
        ];

        $fourAdvantages = ['renovation.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "renovation.four_advantages.$i";
            $fourAdvantages[] = "renovation.four_advantages.0$i";
        }

        $whyWe = [];
        for ($i=0; $i < 7; $i++) { 
            $whyWe[] = "renovation.why_we.$i";
        }

        $questions = [];
        for ($i=1; $i < 10; $i++) { 
            $questions[] = "renovation.questions.question_$i";
            $questions[] = "renovation.questions.answer_$i";
        }

        $slider = [];
        for ($i=1; $i <= 12; $i++) { 
            $slider[] = "img/renovation/slider/$i-1.webp";
            $slider[] = "img/renovation/slider/$i-2.webp";
            $slider[] = "renovation.slider.slide_$i.name";
            $slider[] = "renovation.slider.slide_$i.review";
        }

        return $this->setLocaleAndView($locale, 'renovation.index', compact('services', 'cases', 'fourAdvantages', 'whyWe', 'questions', 'slider'));
    }

    public function apartment ($locale){
        $banner = [
            'img' => 'img/renovation/apartment/banner.webp',
            'title' => 'renovation.apartment.title',
        ];

        $stages = [
            'title' => 'renovation.apartment.stages.title',
            'text' => 'renovation.apartment.stages.text',
            'content' => [],
        ];
        for($i=1; $i<9; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/renovation/apartment/stages/$i.webp",'title' => "renovation.apartment.stages.stage_$i.title", 'text' =>"renovation.apartment.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'renovation.apartment.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/renovation/apartment/recommend/$i.webp",'title' => "renovation.apartment.recommend.item_$i.title", 'text' => "renovation.apartment.recommend.item_$i.text"];
        }

        $fourAdvantages = ['renovation.apartment.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "renovation.apartment.four_advantages.$i";
            $fourAdvantages[] = "renovation.apartment.four_advantages.0$i";
        }

        $typeClients = ['title' => 'renovation.apartment.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/renovation/apartment/clients/$i.webp",'title' => "renovation.apartment.clients.client_$i.title", 'text' => "renovation.apartment.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'renovation.apartment', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function offices ($locale){

        $banner = [
            'img' => 'img/renovation/offices/banner1.webp',
            'title' => 'renovation.offices.title',
        ];

        $stages = [
            'title' => 'renovation.offices.stages.title',
            'text' => 'renovation.offices.stages.text',
            'content' => [],
        ];
        for($i=1; $i<7; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/renovation/offices/stages/$i.webp",'title' => "renovation.offices.stages.stage_$i.title", 'text' =>"renovation.offices.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'renovation.offices.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/renovation/offices/recommend/$i.webp",'title' => "renovation.offices.recommend.item_$i.title", 'text' => "renovation.offices.recommend.item_$i.text"];
        }

        $fourAdvantages = ['renovation.offices.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "renovation.offices.four_advantages.$i";
            $fourAdvantages[] = "renovation.offices.four_advantages.0$i";
        }

        $typeClients = ['title' => 'renovation.offices.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/renovation/offices/clients/$i.webp",'title' => "renovation.offices.clients.client_$i.title", 'text' => "renovation.offices.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'renovation.offices', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function industrial ($locale){

        $banner = [
            'img' => 'img/renovation/industrial/banner.webp',
            'title' => 'renovation.industrial.title',
        ];

        $stages = [
            'title' => 'renovation.industrial.stages.title',
            'text' => 'renovation.industrial.stages.text',
            'content' => [],
        ];
        for($i=1; $i<8; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/renovation/industrial/stages/$i.webp",'title' => "renovation.industrial.stages.stage_$i.title", 'text' =>"renovation.industrial.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'renovation.industrial.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/renovation/industrial/recommend/$i.webp",'title' => "renovation.industrial.recommend.item_$i.title", 'text' => "renovation.industrial.recommend.item_$i.text"];
        }

        $fourAdvantages = ['renovation.industrial.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "renovation.industrial.four_advantages.$i";
            $fourAdvantages[] = "renovation.industrial.four_advantages.0$i";
        }

        $typeClients = ['title' => 'renovation.industrial.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/renovation/industrial/clients/$i.webp",'title' => "renovation.industrial.clients.client_$i.title", 'text' => "renovation.industrial.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'renovation.industrial',  compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }
}
