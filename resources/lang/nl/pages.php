<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Instellingen',
    'title' => 'Hotjar-instellingen',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Configureer de Hotjar-trackingcode voor je site.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Je Hotjar-site-ID (een getal). Je vindt het in Hotjar onder Sites & Organizations. Laat leeg om tracking uit te schakelen.',
        ],
        'version' => [
            'label' => 'Snippetversie',
            'helper' => 'Versie van de Hotjar-trackingcode (hjsv). Behoud de standaardwaarde tenzij Hotjar anders aangeeft.',
        ],
    ],
];
