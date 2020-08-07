<?php

return [
    '__name' => 'lib-user-main-about',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-main-about.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-main-about' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user-main' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.me.setting.profile' => [
                'about' => [
                    'type' => 'textarea',
                    'size' => 'big',
                    'rules' => [],
                    'label' => 'About Me',
                    'xpos' => 'bottom'
                ]
            ],
            'admin.user.profile' =>[ 
                'about' => [
                    'type' => 'textarea',
                    'size' => 'big',
                    'rules' => [],
                    'label' => 'About User',
                    'position' => 'bottom-left'
                ]
            ]
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'user' => [
                'about' => [
                    'type' => 'text'
                ]
            ]
        ]
    ]
];