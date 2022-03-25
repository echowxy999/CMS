<?php

namespace Customer;

use Laminas\Router\Http\Segment;
use Laminas\Router\Http\Literal;
use Laminas\Mvc\Controller\LazyControllerAbstractFactory;
use Customer\Controller\Customer;

return [
    'router' => [
        'routes' => [
            'customer-view' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/customer/customer-list/customer-view/:id',
                    'defaults' => [
                        'controller' => Controller\CustomerController::class,
                        'action'     => 'customer-view',
                    ],
                ],
            ],
            'customer-list' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/customer/customer-list',
                    'defaults' => [
                        'controller' => Controller\CustomerController::class,
                        'action'     => 'customer-list',
                    ],
                ],
            ],
            'customer-add' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/customer/customer-list/customer-add',
                    'defaults' => [
                        'controller' => Controller\CustomerController::class,
                        'action'     => 'customer-add',
                    ],
                ],
            ],
            'customer-edit' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/customer/customer-list/customer-edit/:id',
                    'defaults' => [
                        'controller' => Controller\CustomerController::class,
                        'action'     => 'customer-edit',
                    ],
                ],
            ],
            'customer-extra-attribute' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/customer/customer-list/customer-extra-attribute',
                    'defaults' => [
                        'controller' => Controller\CustomerController::class,
                        'action'     => 'customer-extra-attribute',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'strategies' => [
            'Smarty\View\Strategy'
        ],
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../../Template/layout/frontend/billing-main-layout.tpl',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];