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

1. example usage
        
        use Jaykeren\ImageMoo\Facades\ImageMoo;
        
        ImageMoo::load('/tmp/test.jpg')
                ->resize_crop(200, 200)
                ->set_jpeg_quality(60)
                ->save('/tmp/test_cropped.jpg', true);

1. you're ready to go
