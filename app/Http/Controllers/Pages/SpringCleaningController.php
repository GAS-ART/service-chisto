<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class SpringCleaningController extends SetLangAndViewController
{
    public function index ($locale){

        $services = [
            'title' => 'spring-cleaning.service.title',
            'item' => [
                [
                    'link' => 'spring-cleaning.apartment',
                    'img' => 'img/spring_cleaning/1.webp',
                    'title' => 'spring-cleaning.service.services.1',
                ],
                [
                    'link' => 'spring-cleaning.offices',
                    'img' => 'img/spring_cleaning/2.webp',
                    'title' => 'spring-cleaning.service.services.2',
                ],
                [
                    'link' => 'spring-cleaning.restaurants',
                    'img' => 'img/spring_cleaning/3.webp',
                    'title' => 'spring-cleaning.service.services.3',
                ],
                [
                    'link' => 'spring-cleaning.industrial',
                    'img' => 'img/spring_cleaning/4.webp',
                    'title' => 'spring-cleaning.service.services.4',
                ],
            ],
        ];

        $cases = [
            'title' => 'spring-cleaning.cases.title',
            'item' => [
                [
                    'title' => 'spring-cleaning.cases.item.1_title',
                    'text' => 'spring-cleaning.cases.item.1_text',
                ],
                [
                    'title' => 'spring-cleaning.cases.item.2_title',
                    'text' => 'spring-cleaning.cases.item.2_text',
                ],
                [
                    'title' => 'spring-cleaning.cases.item.3_title',
                    'text' => 'spring-cleaning.cases.item.3_text',
                ],
                [
                    'title' => 'spring-cleaning.cases.item.4_title',
                    'text' => 'spring-cleaning.cases.item.4_text',
                ],
                [
                    'title' => 'spring-cleaning.cases.item.5_title',
                    'text' => 'spring-cleaning.cases.item.5_text',
                ],
                [
                    'title' => 'spring-cleaning.cases.item.6_title',
                    'text' => 'spring-cleaning.cases.item.6_text',
                ],
            ],
        ];

        $fourAdvantages = ['spring-cleaning.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "spring-cleaning.four_advantages.$i";
            $fourAdvantages[] = "spring-cleaning.four_advantages.0$i";
        }

        $whyWe = [];
        for ($i=0; $i < 7; $i++) { 
            $whyWe[] = "spring-cleaning.why_we.$i";
        }

        $questions = [];
        for ($i=1; $i < 10; $i++) { 
            $questions[] = "spring-cleaning.questions.question_$i";
            $questions[] = "spring-cleaning.questions.answer_$i";
        }

        $slider = [];
        for ($i=1; $i <= 21; $i++) { 
            $slider[] = "img/spring_cleaning/slider/$i-1.webp";
            $slider[] = "img/spring_cleaning/slider/$i-2.webp";
            $slider[] = "spring-cleaning.slider.slide_$i.name";
            $slider[] = "spring-cleaning.slider.slide_$i.review";
        }

        return $this->setLocaleAndView($locale, 'spring-cleaning.index', compact('services', 'cases', 'fourAdvantages', 'whyWe', 'questions', 'slider'));
    }

    public function apartment ($locale){
        $banner = [
            'img' => 'img/spring_cleaning/apartment/1.webp',
            'title' => 'spring-cleaning.apartment.title',
        ];

        $stages = [
            'title' => 'spring-cleaning.apartment.stages.title',
            'text' => 'spring-cleaning.apartment.stages.text',
            'content' => [],
        ];
        for($i=1; $i<7; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/spring_cleaning/apartment/stages/$i.webp",'title' => "spring-cleaning.apartment.stages.stage_$i.title", 'text' =>"spring-cleaning.apartment.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'spring-cleaning.apartment.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/spring_cleaning/apartment/recommend/$i.webp",'title' => "spring-cleaning.apartment.recommend.item_$i.title", 'text' => "spring-cleaning.apartment.recommend.item_$i.text"];
        }

        $fourAdvantages = ['spring-cleaning.apartment.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "spring-cleaning.apartment.four_advantages.$i";
            $fourAdvantages[] = "spring-cleaning.apartment.four_advantages.0$i";
        }

        $typeClients = ['title' => 'spring-cleaning.apartment.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/spring_cleaning/apartment/clients/$i.webp",'title' => "spring-cleaning.apartment.clients.client_$i.title", 'text' => "spring-cleaning.apartment.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'spring-cleaning.apartment', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function restaurants ($locale){

        $banner = [
            'img' => 'img/spring_cleaning/restaurants/banner.webp',
            'title' => 'spring-cleaning.restaurants.title',
        ];

        $stages = [
            'title' => 'spring-cleaning.restaurants.stages.title',
            'text' => 'spring-cleaning.restaurants.stages.text',
            'content' => [],
        ];
        for($i=1; $i<9; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/spring_cleaning/restaurants/stages/$i.webp",'title' => "spring-cleaning.restaurants.stages.stage_$i.title", 'text' =>"spring-cleaning.restaurants.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'spring-cleaning.restaurants.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/spring_cleaning/restaurants/recommend/$i.webp",'title' => "spring-cleaning.restaurants.recommend.item_$i.title", 'text' => "spring-cleaning.restaurants.recommend.item_$i.text"];
        }

        $fourAdvantages = ['spring-cleaning.restaurants.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "spring-cleaning.restaurants.four_advantages.$i";
            $fourAdvantages[] = "spring-cleaning.restaurants.four_advantages.0$i";
        }

        $typeClients = ['title' => 'spring-cleaning.restaurants.clients.title', 'content' => []];
        for ($i=1; $i < 5; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/spring_cleaning/restaurants/clients/$i.webp",'title' => "spring-cleaning.restaurants.clients.client_$i.title", 'text' => "spring-cleaning.restaurants.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'spring-cleaning.restaurants', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function offices ($locale){

        $banner = [
            'img' => 'img/spring_cleaning/offices/banner.webp',
            'title' => 'spring-cleaning.offices.title',
        ];

        $stages = [
            'title' => 'spring-cleaning.offices.stages.title',
            'text' => 'spring-cleaning.offices.stages.text',
            'content' => [],
        ];
        for($i=1; $i<9; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/spring_cleaning/offices/stages/$i.webp",'title' => "spring-cleaning.offices.stages.stage_$i.title", 'text' =>"spring-cleaning.offices.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'spring-cleaning.offices.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/spring_cleaning/offices/recommend/$i.webp",'title' => "spring-cleaning.offices.recommend.item_$i.title", 'text' => "spring-cleaning.offices.recommend.item_$i.text"];
        }

        $fourAdvantages = ['spring-cleaning.offices.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "spring-cleaning.offices.four_advantages.$i";
            $fourAdvantages[] = "spring-cleaning.offices.four_advantages.0$i";
        }

        $typeClients = ['title' => 'spring-cleaning.offices.clients.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/spring_cleaning/offices/clients/$i.webp",'title' => "spring-cleaning.offices.clients.client_$i.title", 'text' => "spring-cleaning.offices.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'spring-cleaning.offices', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

    public function industrial ($locale){

        $banner = [
            'img' => 'img/spring_cleaning/industrial/banner.webp',
            'title' => 'spring-cleaning.industrial.title',
        ];

        $stages = [
            'title' => 'spring-cleaning.industrial.stages.title',
            'text' => 'spring-cleaning.industrial.stages.text',
            'content' => [],
        ];
        for($i=1; $i<9; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/spring_cleaning/industrial/stages/$i.webp",'title' => "spring-cleaning.industrial.stages.stage_$i.title", 'text' =>"spring-cleaning.industrial.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'spring-cleaning.industrial.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/spring_cleaning/industrial/recommend/$i.webp",'title' => "spring-cleaning.industrial.recommend.item_$i.title", 'text' => "spring-cleaning.industrial.recommend.item_$i.text"];
        }

        $fourAdvantages = ['spring-cleaning.industrial.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "spring-cleaning.industrial.four_advantages.$i";
            $fourAdvantages[] = "spring-cleaning.industrial.four_advantages.0$i";
        }

        $typeClients = ['title' => 'spring-cleaning.industrial.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/spring_cleaning/industrial/clients/$i.webp",'title' => "spring-cleaning.industrial.clients.client_$i.title", 'text' => "spring-cleaning.industrial.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'spring-cleaning.industrial',  compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }
}
