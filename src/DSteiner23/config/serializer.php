<?php return [
    'mappings' => [
        'DSteiner23\Light\Bulb' => [
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
        'DSteiner23\Light\State' => [
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
