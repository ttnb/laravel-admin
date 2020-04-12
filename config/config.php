<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sidebar menu configuration
    |--------------------------------------------------------------------------
    |
    */

    'menu' => [
        [
            'type' => 'item',
            'label' => 'Dashboard',
            'route' => 'admin.index',
            'icon' => 'fas fa-tachometer-alt'
        ],
        [
            'type' => 'header',
            'label' => 'SETTINGS'
        ],
        [
            'type' => 'item',
            'label' => 'Settings',
            'route' => 'admin.index',
            'icon' => 'fas fa-tachometer-alt',
            'sub' => [
                [
                    'label' => 'General',
                    'route' => 'admin.index'
                ]
            ]
        ]
    ]

];
