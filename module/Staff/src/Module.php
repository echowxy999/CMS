<?php


namespace Staff;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Mvc\ModuleRouteListener;
use Laminas\Mvc\MvcEvent;
use Laminas\Session\SessionManager;
use Laminas\Session\Config\SessionConfig;
use Laminas\Session\Container;
use Laminas\Session\Validator;

use Dbset\Staff\StafflistTable;



class Module implements ConfigProviderInterface
{
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }


    public function getControllerConfig()
    {
        return [
            'factories' => [
                Controller\StaffController::class => function($container) {
                    return new Controller\StaffController(
                        $container->get(StafflistTable::class)
                    );
                },
            ],
        ];
    }


}