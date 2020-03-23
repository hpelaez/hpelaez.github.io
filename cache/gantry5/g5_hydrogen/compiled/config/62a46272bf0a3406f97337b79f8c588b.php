<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1584845166,
    'checksum' => 'ed2cde672a685ce72e56037963b0b844',
    'files' => [
        'user/data/gantry5/themes/g5_hydrogen/config/default' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/index.yaml',
                'modified' => 1584841403
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/layout.yaml',
                'modified' => 1584841403
            ],
            'page/assets' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/page/assets.yaml',
                'modified' => 1584773337
            ],
            'page/body' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/page/body.yaml',
                'modified' => 1584773337
            ],
            'page/fontawesome' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/page/fontawesome.yaml',
                'modified' => 1584773337
            ],
            'page/head' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/page/head.yaml',
                'modified' => 1584773337
            ],
            'particles/branding' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/branding.yaml',
                'modified' => 1584845166
            ],
            'particles/content' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/content.yaml',
                'modified' => 1584845166
            ],
            'particles/contentarray' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/contentarray.yaml',
                'modified' => 1584845166
            ],
            'particles/copyright' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/copyright.yaml',
                'modified' => 1584845166
            ],
            'particles/custom' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/custom.yaml',
                'modified' => 1584845166
            ],
            'particles/date' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/date.yaml',
                'modified' => 1584845166
            ],
            'particles/login' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/login.yaml',
                'modified' => 1584845166
            ],
            'particles/logo' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1584845166
            ],
            'particles/menu' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/menu.yaml',
                'modified' => 1584845166
            ],
            'particles/messages' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/messages.yaml',
                'modified' => 1584845166
            ],
            'particles/mobile-menu' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/mobile-menu.yaml',
                'modified' => 1584845166
            ],
            'particles/position' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/position.yaml',
                'modified' => 1584845166
            ],
            'particles/sample' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/sample.yaml',
                'modified' => 1584845166
            ],
            'particles/social' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/social.yaml',
                'modified' => 1584845166
            ],
            'particles/spacer' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/spacer.yaml',
                'modified' => 1584845166
            ],
            'particles/totop' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/particles/totop.yaml',
                'modified' => 1584845166
            ],
            'styles' => [
                'file' => 'user/data/gantry5/themes/g5_hydrogen/config/default/styles.yaml',
                'modified' => 1584844761
            ]
        ],
        'user/themes/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'user/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1584764095
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '0',
                'content' => '',
                'css' => [
                    'class' => ''
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ],
                'owner' => 'Logia Wolfgang Amadeus Mozart'
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => '1',
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => '1',
                'url' => '',
                'image' => 'gantry-media://cropped-HEADER-DARKENED.png',
                'text' => 'Logia Wolfgang Amadeus Mozart  Nº 1740, Montreal',
                'class' => 'gantry-logo',
                'height' => '',
                'svg' => ''
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => '1',
                'menu' => 'mainmenu',
                'base' => 'home',
                'startLevel' => '1',
                'maxLevels' => '0',
                'renderTitles' => '0',
                'hoverExpand' => '1',
                'mobileTarget' => '1',
                'forceTarget' => '0'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '0',
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'icons_only',
                'title' => '',
                'items' => [
                    
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'totop'
                ],
                'icon' => 'fa fa-arrow-circle-up',
                'content' => ''
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'breadcrumbs' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => '1'
            ],
            'contentarray' => [
                'enabled' => '1',
                'article' => [
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'title' => [
                            'enabled' => 'show',
                            'limit' => ''
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show',
                            'label' => '',
                            'css' => ''
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'show',
                            'route' => ''
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'default',
                        'ordering' => 'asc'
                    ]
                ],
                'css' => [
                    'class' => ''
                ],
                'extra' => [
                    
                ]
            ],
            'date' => [
                'enabled' => '1',
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l j F Y'
                ]
            ],
            'feed' => [
                'enabled' => true
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap2' => [
                    'enabled' => 0
                ],
                'bootstrap3' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'langswitcher' => [
                'enabled' => true
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'login' => [
                'enabled' => '1'
            ],
            'messages' => [
                'enabled' => '1'
            ],
            'position' => [
                'enabled' => '1',
                'chrome' => 'gantry'
            ],
            'search' => [
                'enabled' => true
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry g-helium-style',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => '1'
            ],
            'assets' => [
                'favicon' => 'gantry-media://favicon.png',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#d1222d',
                'color-2' => ''
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#222222',
                'body-font' => 'family=Open+Sans:700,400',
                'heading-font' => 'family=Open+Sans:700,400'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '',
                'text-color' => ''
            ],
            'footer' => [
                'background' => '#111820',
                'text-color' => '#ffffff'
            ],
            'header' => [
                'background' => '#111820',
                'text-color' => '#FFFFFF'
            ],
            'main' => [
                'background' => '#f2f2f2',
                'text-color' => '#222222'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade-in-up',
                'hide-on-mobile' => '0'
            ],
            'navigation' => [
                'background' => '#111820',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.5)'
            ],
            'offcanvas' => [
                'background' => '#111820',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#111820',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '',
                'image' => '',
                'text-color' => ''
            ],
            'subfeature' => [
                'background' => '',
                'text-color' => ''
            ],
            'preset' => 'preset1'
        ],
        'pages' => [
            'blog_item' => [
                'header' => [
                    'process' => [
                        'markdown' => true,
                        'twig' => false
                    ],
                    'child_type' => 'default',
                    'admin' => [
                        'children_display_order' => 'collection'
                    ]
                ],
                'name' => 'default'
            ],
            'blog_list' => [
                'header' => [
                    'process' => [
                        'markdown' => true,
                        'twig' => false
                    ],
                    'child_type' => 'blog_item',
                    'admin' => [
                        'children_display_order' => 'collection'
                    ],
                    'content' => [
                        'items' => '@self.children',
                        'leading' => 0,
                        'columns' => 2,
                        'limit' => 5,
                        'order' => [
                            'by' => 'date',
                            'dir' => 'desc'
                        ],
                        'show_date' => 0,
                        'pagination' => 1,
                        'url_taxonomy_filters' => 1
                    ]
                ],
                'name' => 'default'
            ],
            'modular' => [
                'features' => [
                    'name' => 'modular/features',
                    'header' => [
                        'template' => 'modular/features'
                    ]
                ],
                'showcase' => [
                    'name' => 'modular/showcase',
                    'header' => [
                        'template' => 'modular/showcase',
                        'buttons' => [
                            'primary' => 1
                        ]
                    ]
                ],
                'text' => [
                    'name' => 'modular/text',
                    'header' => [
                        'template' => 'modular/text',
                        'image_align' => 'left'
                    ]
                ]
            ]
        ],
        'index' => [
            'name' => 'default',
            'timestamp' => 1584841403,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1584764095
            ],
            'positions' => [
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-3604' => 'Logo'
                ],
                'menu' => [
                    'menu-9603' => 'Menu'
                ],
                'position' => [
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'content' => [
                    'system-content-3056' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-6620' => 'Copyright'
                ],
                'mobile-menu' => [
                    'mobile-menu-8369' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1584764095
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'logo-3604'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'menu-9603'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'position-breadcrumbs'
                    ],
                    1 => [
                        0 => 'system-content-3056'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-6620'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-8369'
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
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'main' => [
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
                'logo-3604' => [
                    'block' => [
                        'variations' => 'center'
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
                ],
                'copyright-6620' => [
                    'attributes' => [
                        'owner' => 'Logia Wolfgang Amadeus Mozart  Nº 1740, Montreal'
                    ],
                    'block' => [
                        'variations' => 'center',
                        'extra' => [
                            0 => [
                                'style' => 'font-size: 12px'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
