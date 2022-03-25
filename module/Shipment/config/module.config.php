<?php

namespace Shipment;

use Laminas\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'shipment' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/shipment',
                    'defaults' => [
                        'controller' => Controller\ShipmentController::class,
                        'action'     => 'shipment',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'strategies' => [
            'Smarty\View\Strategy'
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'smarty' => [
        'escape_html' => false
    ]
];