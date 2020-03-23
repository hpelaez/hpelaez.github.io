<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/hpelaez/Workspace/project-mozart/system/blueprints/pages/modular.yaml',
    'modified' => 1584628258,
    'data' => [
        'title' => 'PLUGIN_ADMIN.MODULAR',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'modular_title' => [
                                    'type' => 'spacer',
                                    'title' => 'PLUGIN_ADMIN.MODULAR_SETUP'
                                ],
                                'header.content.items' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ITEMS',
                                    'default' => '@self.modular',
                                    'size' => 'medium'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ORDER_BY',
                                    'placeholder' => 'date',
                                    'help' => NULL,
                                    'size' => 'small'
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ORDER',
                                    'help' => '"desc" or "asc" are valid values',
                                    'placeholder' => 'desc',
                                    'size' => 'small'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
