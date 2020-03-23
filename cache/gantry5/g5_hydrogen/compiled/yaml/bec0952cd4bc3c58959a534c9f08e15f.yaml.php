<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/hpelaez/Workspace/project-mozart/user/data/gantry5/themes/g5_hydrogen/config/home/layout.yaml',
    'modified' => 1584764584,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/3-col.png',
            'name' => '3_column',
            'timestamp' => 1584764095
        ],
        'layout' => [
            '/header/' => [
                0 => [
                    0 => 'logo-3437 30',
                    1 => 'position-header 70'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-4417'
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
                        'main 60' => [
                            0 => [
                                0 => 'position-breadcrumbs'
                            ],
                            1 => [
                                0 => 'system-messages-1266'
                            ],
                            2 => [
                                0 => 'system-content-2664'
                            ]
                        ]
                    ],
                    2 => [
                        'aside 20' => [
                            0 => [
                                0 => 'position-aside'
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
                    0 => 'copyright-3417 40',
                    1 => 'spacer-6936 30',
                    2 => 'branding-7619 30'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-3868'
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
            'aside' => [
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
            'position-aside' => [
                'attributes' => [
                    'key' => 'aside'
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
