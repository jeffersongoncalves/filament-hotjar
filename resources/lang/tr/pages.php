<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Ayarlar',
    'title' => 'Hotjar ayarları',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Siteniz için Hotjar izleme kodunu yapılandırın.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'Site kimliği',
            'helper' => 'Hotjar site kimliğiniz (bir sayı). Hotjar\'da Sites & Organizations altında bulabilirsiniz. İzlemeyi devre dışı bırakmak için boş bırakın.',
        ],
        'version' => [
            'label' => 'Kod sürümü',
            'helper' => 'Hotjar izleme kodu sürümü (hjsv). Hotjar aksini belirtmedikçe varsayılan değeri koruyun.',
        ],
    ],
];
