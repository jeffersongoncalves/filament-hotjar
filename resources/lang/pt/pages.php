<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Configure o código de rastreamento do Hotjar do seu site.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID do site',
            'helper' => 'O ID do seu site no Hotjar (um número). Encontra-o no Hotjar em Sites & Organizations. Deixe vazio para desativar o rastreamento.',
        ],
        'version' => [
            'label' => 'Versão do snippet',
            'helper' => 'Versão do código de rastreamento do Hotjar (hjsv). Mantenha o valor predefinido, salvo indicação em contrário do Hotjar.',
        ],
    ],
];
