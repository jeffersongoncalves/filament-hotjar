<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Parametrlər',
    'title' => 'Hotjar parametrləri',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Saytınız üçün Hotjar izləmə kodunu konfiqurasiya edin.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Hotjar sayt ID-niz (rəqəm). Onu Hotjar-da Sites & Organizations bölməsində tapa bilərsiniz. İzləməni deaktiv etmək üçün boş buraxın.',
        ],
        'version' => [
            'label' => 'Kod versiyası',
            'helper' => 'Hotjar izləmə kodunun versiyası (hjsv). Hotjar başqa cür göstərmirsə, standart dəyəri saxlayın.',
        ],
    ],
];
