# laravel-image-moo

Laravel Image Moo, helper image processing library (codeigniter image_moo library) created by mat-moo (http://www.matmoo.com/digital-dribble/codeigniter/image_moo).

# install instructions

1. install by composer

        $ composer require jaykeren/laravel-image-moo
    
1. add service provider in config/app.php

        'providers' => [
			      //...
              Jaykeren\ImageMoo\ImageMooServiceProvider::class,
            //...
        ],

1. you're ready to go
