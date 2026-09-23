<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Hotjar',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'Skonfiguruj kod śledzenia Hotjar dla swojej witryny.',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'ID witryny',
            'helper' => 'Identyfikator witryny w Hotjar (liczba). Znajdziesz go w Hotjar w sekcji Sites & Organizations. Pozostaw puste, aby wyłączyć śledzenie.',
        ],
        'version' => [
            'label' => 'Wersja fragmentu kodu',
            'helper' => 'Wersja kodu śledzenia Hotjar (hjsv). Zachowaj wartość domyślną, chyba że Hotjar zaleca inaczej.',
        ],
    ],
];
