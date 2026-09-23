<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações do Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Configure o código de rastreamento do Hotjar do seu site.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID do site',
            'helper' => 'O ID do seu site no Hotjar (um número). Encontre-o no Hotjar em Sites & Organizations. Deixe vazio para desativar o rastreamento.',
        ],
        'version' => [
            'label' => 'Versão do snippet',
            'helper' => 'Versão do código de rastreamento do Hotjar (hjsv). Mantenha o padrão, a menos que o Hotjar indique outra.',
        ],
    ],
];
