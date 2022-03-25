<?php
namespace Dbset\Staff\Factory;

use Interop\Container\ContainerInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Db\Adapter\AdapterInterface;


class StafflistTableFactory implements FactoryInterface
{

    private $_tableName = 'staff_list';

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $dbAdapter = $container->get(AdapterInterface::class);

        $resultSetPrototype = new ResultSet();

        $resultSetPrototype->setArrayObjectPrototype(new \Model\Staff\Stafflist());

        $tableGateway =  new TableGateway($this->_tableName, $dbAdapter, null, $resultSetPrototype);

        return new \Dbset\Staff\StafflistTable($tableGateway);
    }


}
