<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => '設定',
    'title' => 'Hotjar 設定',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => 'サイトの Hotjar トラッキングコードを設定します。',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => 'サイト ID',
            'helper' => 'Hotjar のサイト ID（数値）。Hotjar の Sites & Organizations で確認できます。空欄にするとトラッキングを無効にします。',
        ],
        'version' => [
            'label' => 'スニペットのバージョン',
            'helper' => 'Hotjar トラッキングコードのバージョン（hjsv）。Hotjar から指示がない限りデフォルトのままにしてください。',
        ],
    ],
];
