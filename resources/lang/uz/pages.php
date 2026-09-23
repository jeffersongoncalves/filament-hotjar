<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Hotjar sozlamalari',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Saytingiz uchun Hotjar kuzatuv kodini sozlang.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Hotjar sayt ID raqamingiz (son). Uni Hotjarʼda Sites & Organizations boʻlimida topasiz. Kuzatuvni oʻchirish uchun boʻsh qoldiring.',
        ],
        'version' => [
            'label' => 'Kod versiyasi',
            'helper' => 'Hotjar kuzatuv kodi versiyasi (hjsv). Hotjar boshqacha koʻrsatmasa, standart qiymatni qoldiring.',
        ],
    ],
];
