<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/hpelaez/Workspace/project-mozart/user/config/plugins/email.yaml',
    'modified' => 1584945426,
    'data' => [
        'enabled' => true,
        'from' => 'henry.pelaez24@yahoo.es',
        'from_name' => NULL,
        'to' => 'henry.pelaez24@gmail.com',
        'to_name' => 'Henry Pelaez',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'henry.pelaez24@gmail.com',
                'password' => 'yoickkck24'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'charset' => NULL,
        'cc' => NULL,
        'cc_name' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'reply_to_name' => NULL,
        'body' => NULL
    ]
];
