<?php
namespace Dbset\Sys\Factory;

use Interop\Container\ContainerInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Db\Adapter\AdapterInterface;


class SysdashboardTableFactory implements FactoryInterface
{

    private $_tableName = 'sys_dashboard';

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $dbAdapter = $container->get(AdapterInterface::class);

        $resultSetPrototype = new ResultSet();

        $resultSetPrototype->setArrayObjectPrototype(new \Model\Sys\Sysdashboard());

        $tableGateway =  new TableGateway($this->_tableName, $dbAdapter, null, $resultSetPrototype);

        return new \Dbset\Sys\SysdashboardTable($tableGateway);
    }


}
