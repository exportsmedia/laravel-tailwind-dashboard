<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nav Menu Links
    |--------------------------------------------------------------------------
    |
    |
    */
    'dashboard' => [
        'sidebar' => [
            [
                'text' =>'Dashboard',
                'route' => 'dashboard',
                'icon' => '<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>',
                'submenu' => [],
            ],
            [
                'text' => 'Second Link',
                'route' => 'dashboard',
                'icon' => '<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"> <path     d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"> </path></svg>',
                'submenu' => [
                    [
                        'text' => 'Submenu 1',
                        'route' => 'dashboard',
                    ],
                    [
                        'text' => 'Submenu 2',
                        'route' => 'dashboard',
                    ],
                    [
                        'text' => 'Submenu 3',
                        'route' => 'dashboard',
                    ], 
                ],
            ],
            [
            'text' => 'Second Link',
            'route' => 'dashboard',
            'icon' => '<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
            </svg>',
            'submenu' => [
            [
            'text' => 'Submenu 1',
            'route' => 'dashboard',
            ],
            [
            'text' => 'Submenu 2',
            'route' => 'dashboard',
            ],
            [
            'text' => 'Submenu 3',
            'route' => 'dashboard',
            ],
            ],
            ],
            [
                'text' => 'Third Link',
                'route' => 'dashboard',
                'icon' => '<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>',
                'submenu' => [],
            ]
        ],
    ],

    'theme' => [
        'primary' => [
            [
                'text' =>'',
                'route' => '',
                'icon' => '',
            ],
            [
                'text' =>'',
                'route' => '',
                'icon' => '',
            ],
            [
                'text' =>'',
                'route' => '',
                'icon' => '',
            ]
        ],
        'footer' => [
            [
                'text' =>'',
                'route' => '',
                'icon' => '',
            ],
            [
                'text' =>'',
                'route' => '',
                'icon' => '',
            ],
            [
                'text' =>'',
                'route' => '',
                'icon' => '',
            ]
        ],
    ],

];
