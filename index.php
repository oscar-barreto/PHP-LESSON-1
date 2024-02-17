<?php
        $series =[
            ['name' =>'The Wheel of Time',
            'author' =>'Robert Jordan',
            'purchaseLink'=> "https://example.com",
            'releaseYear' => 1997,
            ],
            ['name' =>'Mistborn',
            'author' =>'Brandon Sanderson',
            'purchaseLink'=> "https://example.com",
            'releaseYear' => 2005,
            ],
        ];

       function filter($items, $fn){
            $filteredItems =[];
            foreach($items as $item){
                if($fn($item)){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        };
        
        // $filteredBooks = $filter($series, function ($serie) {
        //     return $serie['releaseYear'] >= 2000;
        // });

            $filteredItems = array_filter($series, function($serie){
                return $serie['releaseYear'] < 2000;
            });

            require "index.view.php";

