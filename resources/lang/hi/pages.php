<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Hotjar सेटिंग्स',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'अपनी साइट के लिए Hotjar ट्रैकिंग कोड कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'साइट ID',
            'helper' => 'आपकी Hotjar साइट ID (एक संख्या)। इसे Hotjar में Sites & Organizations के अंतर्गत पाएँ। ट्रैकिंग अक्षम करने के लिए खाली छोड़ें।',
        ],
        'version' => [
            'label' => 'स्निपेट संस्करण',
            'helper' => 'Hotjar ट्रैकिंग कोड का संस्करण (hjsv)। जब तक Hotjar अन्यथा न कहे, डिफ़ॉल्ट मान रखें।',
        ],
    ],
];
