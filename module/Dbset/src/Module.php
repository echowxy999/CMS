<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Dbset;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;



class Module implements ConfigProviderInterface
{
    public function getConfig() : array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    public function getServiceConfig()
    {
        return [
            'factories' => [
                \Dbset\Cust\CustqbinfoTable::class => \Dbset\Cust\Factory\CustqbinfoTableFactory::class,
                \Dbset\Staff\StafflistTable::class => \Dbset\Staff\Factory\StafflistTableFactory::class,
                \Dbset\Cust\CustcustomerTable::class => \Dbset\Cust\Factory\CustcustomerTableFactory::class,
                \Dbset\Cust\CustcustomerattributeTable::class => \Dbset\Cust\Factory\CustcustomerattributeTableFactory::class,
                \Dbset\Cust\CustextraattributeTable::class => \Dbset\Cust\Factory\CustextraattributeTableFactory::class,
                \Dbset\Sys\SysdashboardTable::class => \Dbset\Sys\Factory\SysdashboardTableFactory::class
            ],
        ];
    }

}
