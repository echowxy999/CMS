<?php


namespace Customer;

use Customer\Controller\CustomerController;
use Dbset\Cust\CustcustomerattributeTable;
use Dbset\Cust\CustcustomerTable;
use Dbset\Cust\CustextraattributeTable;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;

use Dbset\Cust\CustqbinfoTable;



class Module implements ConfigProviderInterface
{
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }


    public function getControllerConfig()
    {
        return [
            'factories' => array(
                Controller\CustomerController::class => function($container) {
                    return new Controller\CustomerController(
                        $container->get(CustqbinfoTable::class),$container->get(CustcustomerTable::class),
                        $container->get(CustextraattributeTable::class),$container->get(CustcustomerattributeTable::class));
                },
            ),



        ];
    }


}