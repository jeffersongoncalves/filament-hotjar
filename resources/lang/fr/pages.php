<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Configurez le code de suivi Hotjar de votre site.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID du site',
            'helper' => 'L\'ID de votre site Hotjar (un nombre). Vous le trouverez dans Hotjar sous Sites & Organizations. Laissez vide pour désactiver le suivi.',
        ],
        'version' => [
            'label' => 'Version du snippet',
            'helper' => 'Version du code de suivi Hotjar (hjsv). Conservez la valeur par défaut sauf indication contraire de Hotjar.',
        ],
    ],
];
