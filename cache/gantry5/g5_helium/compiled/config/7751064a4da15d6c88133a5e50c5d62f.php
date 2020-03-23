<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1584927618,
    'checksum' => 'a97989e1e54fbd1181bb258b88e3a975',
    'files' => [
        'user/data/gantry5/themes/g5_helium/config/_body_only' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/_body_only/index.yaml',
                'modified' => 1584925692
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/_body_only/layout.yaml',
                'modified' => 1584925692
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => '_body_only',
            'timestamp' => 1584925692,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/body-only.png',
                'name' => '_body_only',
                'timestamp' => 1584925573
            ],
            'positions' => [
                
            ],
            'sections' => [
                'mainbar' => 'Mainbar'
            ],
            'particles' => [
                'messages' => [
                    'system-messages-6659' => 'System Messages'
                ],
                'content' => [
                    'system-content-5845' => 'Page Content'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/body-only.png',
                'name' => '_body_only',
                'timestamp' => 1584925573
            ],
            'layout' => [
                '/mainbar/' => [
                    0 => [
                        0 => 'system-messages-6659'
                    ],
                    1 => [
                        0 => 'system-content-5845'
                    ]
                ]
            ],
            'structure' => [
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ]
        ]
    ]
];
