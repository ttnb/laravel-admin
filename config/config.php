<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Roles
    |--------------------------------------------------------------------------
    |
    */

    'roles' => [
        'admin' => [
            'admin_access' => true,
            'permissions' => []
        ],
        'editor' => [
            'admin_access' => true,
            'permissions' => []
        ],
        'staff' => [
            'admin_access' => true,
            'permissions' => []
        ],
        'user' => [
            'admin_access' => false,
            'permissions' => []
        ]
    ]
];