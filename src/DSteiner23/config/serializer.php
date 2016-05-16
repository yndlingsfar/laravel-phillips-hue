<?php return [
    'mappings' => [
        'App\Light\Bulb' => [
            'attributes' => [
                'name' => [
                    'type' => 'string'
                ],
                'type' => [
                    'type' => 'string',
                    'serializedName' => 'type'
                ]
            ],
        ],
        'App\Light\State' => [
            'attributes' => [
                'on' => [
                    'type' => 'boolean',
                    'serializedName' => 'on'
                ],
                'saturation' => [
                    'type' => 'integer',
                    'serializedName' => 'sat'
                ],
                'brightness' => [
                    'type' => 'integer',
                    'serializedName' => 'bri'
                ],
                'hue' => [
                    'type' => 'integer',
                    'serializedName' => 'hue'
                ]
            ]
        ]
    ]
];
