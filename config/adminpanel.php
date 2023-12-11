<?php

return [
    'header' => [
        'height' => '60px',
    ],
    'menu' => [
        [
            'text' => 'Level 1.1',
            'submenu' => [
                [
                    'text' => 'Level 2.1',
                    'submenu' => [
                        [
                            'text' => 'Level 3.1',
                        ],
                        [
                            'text' => 'Level 3.2',
                        ]
                    ]
                ],
                [
                    'text' => 'Level 2.2',
                ]
            ]
        ],
        [
            'text' => 'Level 1.2',
        ]
    ],
];