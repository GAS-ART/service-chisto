<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\SetLangAndViewController;

class ExtremeCleaningController extends SetLangAndViewController
{

    public function fire ($locale){
        $banner = [
            'img' => 'img/extreme_cleaning/fire/banner.webp',
            'title' => 'extreme-cleaning.fire.title',
        ];

        $stages = [
            'title' => 'extreme-cleaning.fire.stages.title',
            'text' => 'extreme-cleaning.fire.stages.text',
            'notice_title' => 'extreme-cleaning.fire.stages.notice.title',
            'notice_text' => 'extreme-cleaning.fire.stages.notice.text',
            'content' => [],
        ];
        for($i=1; $i<8; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/extreme_cleaning/fire/stages/$i.webp",'title' => "extreme-cleaning.fire.stages.stage_$i.title", 'text' =>"extreme-cleaning.fire.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'extreme-cleaning.fire.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/extreme_cleaning/fire/recommend/$i.webp",'title' => "extreme-cleaning.fire.recommend.item_$i.title", 'text' => "extreme-cleaning.fire.recommend.item_$i.text"];
        }

        $fourAdvantages = ['extreme-cleaning.fire.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "extreme-cleaning.fire.four_advantages.$i";
            $fourAdvantages[] = "extreme-cleaning.fire.four_advantages.0$i";
        }

        $typeClients = ['title' => 'extreme-cleaning.fire.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/extreme_cleaning/fire/clients/$i.webp",'title' => "extreme-cleaning.fire.clients.client_$i.title", 'text' => "extreme-cleaning.fire.clients.client_$i.text"];
        }

        $slider = [];
        for ($i=1; $i <= 13; $i++) { 
            $slider[] = "img/extreme_cleaning/fire/slider/$i-1.webp";
            $slider[] = "img/extreme_cleaning/fire/slider/$i-2.webp";
            $slider[] = "extreme-cleaning.fire.slider.slide_$i.name";
            $slider[] = "extreme-cleaning.fire.slider.slide_$i.review";
        }

        return $this->setLocaleAndView($locale, 'extreme-cleaning.fire', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients', 'slider'));
    }

    public function cases ($locale){

        $banner = [
            'img' => 'img/extreme_cleaning/cases/banner.webp',
            'title' => 'extreme-cleaning.cases.title',
        ];

        $stages = [
            'title' => 'extreme-cleaning.cases.stages.title',
            'text' => 'extreme-cleaning.cases.stages.text',
            'content' => [],
        ];
        for($i=1; $i<7; $i++){
            $stages['content']["stage_$i"] = ['img' => "img/extreme_cleaning/cases/stages/$i.webp",'title' => "extreme-cleaning.cases.stages.stage_$i.title", 'text' =>"extreme-cleaning.cases.stages.stage_$i.text"]; 
        }

        $recommend = ['title' => 'extreme-cleaning.cases.recommend.title', 'content' => []];
        for ($i=1; $i < 4; $i++) { 
            $recommend['content']["item_$i"] = ['img' => "img/extreme_cleaning/cases/recommend/$i.webp",'title' => "extreme-cleaning.cases.recommend.item_$i.title", 'text' => "extreme-cleaning.cases.recommend.item_$i.text"];
        }

        $fourAdvantages = ['extreme-cleaning.cases.four_advantages.title'];
        for ($i=1; $i < 5; $i++) { 
            $fourAdvantages[] = "extreme-cleaning.cases.four_advantages.$i";
            $fourAdvantages[] = "extreme-cleaning.cases.four_advantages.0$i";
        }

        $typeClients = ['title' => 'extreme-cleaning.cases.clients.title', 'content' => []];
        for ($i=1; $i < 7; $i++) { 
            $typeClients['content']["client_$i"] = ['img' => "img/extreme_cleaning/cases/clients/$i.webp",'title' => "extreme-cleaning.cases.clients.client_$i.title", 'text' => "extreme-cleaning.cases.clients.client_$i.text"];
        }

        return $this->setLocaleAndView($locale, 'extreme-cleaning.cases', compact('banner', 'stages', 'recommend', 'fourAdvantages', 'typeClients'));
    }

}
