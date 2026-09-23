<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Configura el código de seguimiento de Hotjar de tu sitio.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID del sitio',
            'helper' => 'El ID de tu sitio en Hotjar (un número). Lo encontrarás en Hotjar, en Sites & Organizations. Déjalo vacío para desactivar el seguimiento.',
        ],
        'version' => [
            'label' => 'Versión del snippet',
            'helper' => 'Versión del código de seguimiento de Hotjar (hjsv). Mantén el valor predeterminado salvo que Hotjar indique otro.',
        ],
    ],
];
