<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Налаштуйте код відстеження Hotjar для вашого сайту.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID сайту',
            'helper' => 'ID вашого сайту в Hotjar (число). Його можна знайти в Hotjar у розділі Sites & Organizations. Залиште порожнім, щоб вимкнути відстеження.',
        ],
        'version' => [
            'label' => 'Версія сніпета',
            'helper' => 'Версія коду відстеження Hotjar (hjsv). Залиште значення за замовчуванням, якщо Hotjar не вказує інше.',
        ],
    ],
];
