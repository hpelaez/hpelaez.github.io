<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/hpelaez/Workspace/project-mozart/user/themes/g5_hydrogen/layouts/default.yaml',
    'modified' => 1584764095,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png'
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => 'menu'
            ],
            '/main/' => [
                0 => 'position-breadcrumbs',
                1 => 'system-messages',
                2 => 'system-content'
            ],
            '/footer/' => [
                0 => 'position-footer',
                1 => [
                    0 => 'copyright 40',
                    1 => 'spacer 30',
                    2 => 'branding 30'
                ]
            ],
            'offcanvas' => [
                0 => 'mobile-menu'
            ]
        ]
    ]
];