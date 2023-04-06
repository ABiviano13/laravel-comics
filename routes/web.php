<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    $linksArray = [

        'links' => [
            [
                'title' => 'Dc Comics',
                'link' => [
                    'Characters',
                    'Comics',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News'
                ],
                // 'shop' => [
                //     [
                //         'title' => 'Shop',
                //         'link' => [
                //             'Shop DC',
                //             'Shop DC Collectibles'
                //         ]
                //     ]
                // ]
            ],
            [
                'title' => 'Dc',
                'link' => [
                    'Terms Of Use',
                    'Privacy policy (New)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subscriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ],
            [
                'title' => 'Sites',
                'link' => [
                    'DC',
                    'MAD Magazine',
                    'DC Kids',
                    'DC Universe',
                    'DC Power Visa'
                ]
            ],
        ]
    ];

    $arrayIcon = [
        'icons' => [
            '/img/footer-facebook.png',
            '/img/footer-twitter.png',
            '/img/footer-youtube.png',
            '/img/footer-pinterest.png',
            '/img/footer-periscope.png'
        ]
    ];

    return view('welcome', $linksArray, $arrayIcon);
});


