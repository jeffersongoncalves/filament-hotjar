<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'اضبط كود تتبع Hotjar لموقعك.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'معرّف الموقع',
            'helper' => 'معرّف موقعك في Hotjar (رقم). تجده في Hotjar ضمن Sites & Organizations. اتركه فارغًا لتعطيل التتبع.',
        ],
        'version' => [
            'label' => 'إصدار الكود',
            'helper' => 'إصدار كود تتبع Hotjar (hjsv). أبقِ القيمة الافتراضية ما لم يطلب Hotjar غير ذلك.',
        ],
    ],
];
