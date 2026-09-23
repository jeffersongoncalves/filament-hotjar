<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Настройте код отслеживания Hotjar для вашего сайта.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID сайта',
            'helper' => 'ID вашего сайта в Hotjar (число). Его можно найти в Hotjar в разделе Sites & Organizations. Оставьте пустым, чтобы отключить отслеживание.',
        ],
        'version' => [
            'label' => 'Версия сниппета',
            'helper' => 'Версия кода отслеживания Hotjar (hjsv). Оставьте значение по умолчанию, если Hotjar не указывает иное.',
        ],
    ],
];
