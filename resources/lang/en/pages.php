<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Settings',
    'title' => 'Hotjar Settings',

    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Configure the Hotjar tracking code for your site.',
        ],
    ],

    'fields' => [
        'site_id' => [
            'label' => 'Site ID',
            'helper' => 'Your Hotjar Site ID (a number). Find it in Hotjar under Sites & Organizations. Leave empty to disable tracking.',
        ],
        'version' => [
            'label' => 'Snippet Version',
            'helper' => 'Hotjar tracking code version (hjsv). Keep the default unless Hotjar tells you otherwise.',
        ],
    ],
];
