<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/hpelaez/Workspace/project-mozart/user/data/gantry5/themes/g5_hydrogen/config/page_infos/layout.yaml',
    'modified' => 1584840965,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/2-col-left.png',
            'name' => '2_column_-_left',
            'timestamp' => 1584764095
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo-1061 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-6760'
                ]
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            0 => [
                                0 => 'position-sidebar'
                            ]
                        ]
                    ],
                    1 => [
                        'main 80' => [
                            0 => [
                                0 => 'position-breadcrumbs'
                            ],
                            1 => [
                                0 => 'system-messages-8607'
                            ],
                            2 => [
                                0 => 'system-content-2019'
                            ]
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'position-footer'
                ],
                1 => [
                    0 => 'copyright-5926 40',
                    1 => 'spacer-6475 30',
                    2 => 'branding-5589 30'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-3959'
                ]
            ]
        ],
        'structure' => [
            'header' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'sidebar' => [
                'subtype' => 'aside',
                'type' => 'section',
                'block' => [
                    'fixed' => 1
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'position-header' => [
                'attributes' => [
                    'key' => 'header'
                ]
            ],
            'position-sidebar' => [
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ],
            'position-breadcrumbs' => [
                'attributes' => [
                    'key' => 'breadcrumbs'
                ]
            ],
            'position-footer' => [
                'attributes' => [
                    'key' => 'footer'
                ]
            ]
        ]
    ]
];
