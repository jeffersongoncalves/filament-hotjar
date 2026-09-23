<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Einstellungen',
    'title' => 'Hotjar-Einstellungen',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Konfigurieren Sie den Hotjar-Tracking-Code für Ihre Website.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Ihre Hotjar-Site-ID (eine Zahl). Zu finden in Hotjar unter Sites & Organizations. Leer lassen, um das Tracking zu deaktivieren.',
        ],
        'version' => [
            'label' => 'Snippet-Version',
            'helper' => 'Version des Hotjar-Tracking-Codes (hjsv). Behalten Sie den Standardwert bei, sofern Hotjar nichts anderes vorgibt.',
        ],
    ],
];
