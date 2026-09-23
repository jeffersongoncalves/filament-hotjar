<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Configura il codice di tracciamento Hotjar del tuo sito.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID del sito',
            'helper' => 'L\'ID del tuo sito Hotjar (un numero). Lo trovi in Hotjar in Sites & Organizations. Lascia vuoto per disattivare il tracciamento.',
        ],
        'version' => [
            'label' => 'Versione dello snippet',
            'helper' => 'Versione del codice di tracciamento Hotjar (hjsv). Mantieni il valore predefinito salvo diversa indicazione di Hotjar.',
        ],
    ],
];
