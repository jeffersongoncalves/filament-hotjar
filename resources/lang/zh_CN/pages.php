<?php

return [
    'navigation_label' => 'Hotjar',
    'navigation_group' => '设置',
    'title' => 'Hotjar 设置',
    'sections' => [
        'hotjar' => [
            'heading' => 'Hotjar',
            'description' => '为你的网站配置 Hotjar 跟踪代码。',
        ],
    ],
    'fields' => [
        'site_id' => [
            'label' => '站点 ID',
            'helper' => '你的 Hotjar 站点 ID（数字），可在 Hotjar 的 Sites & Organizations 中找到。留空则禁用跟踪。',
        ],
        'version' => [
            'label' => '代码版本',
            'helper' => 'Hotjar 跟踪代码版本（hjsv）。除非 Hotjar 另有说明，否则请保留默认值。',
        ],
    ],
];
