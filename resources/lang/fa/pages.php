<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'کد ردیابی Hotjar را برای سایت خود پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'شناسه سایت',
            'helper' => 'شناسه سایت شما در Hotjar (یک عدد). آن را در Hotjar بخش Sites & Organizations پیدا کنید. برای غیرفعال کردن ردیابی خالی بگذارید.',
        ],
        'version' => [
            'label' => 'نسخه اسنیپت',
            'helper' => 'نسخه کد ردیابی Hotjar (hjsv). مقدار پیش‌فرض را نگه دارید مگر اینکه Hotjar چیز دیگری بگوید.',
        ],
    ],
];
