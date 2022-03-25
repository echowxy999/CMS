<?php

namespace Staff;

use Laminas\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'login' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/login',
                    'defaults' => [
                        'controller' => Controller\StaffController::class,
                        'action'     => 'login',
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
];