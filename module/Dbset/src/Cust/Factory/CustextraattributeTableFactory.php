<?php
namespace Dbset\Cust\Factory;

use Interop\Container\ContainerInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Db\Adapter\AdapterInterface;


class CustextraattributeTableFactory implements FactoryInterface
{

    private $_tableName = 'cust_extra_attribute';

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $dbAdapter = $container->get(AdapterInterface::class);

        $resultSetPrototype = new ResultSet();

        $resultSetPrototype->setArrayObjectPrototype(new \Model\Cust\Custextraattribute());

        $tableGateway =  new TableGateway($this->_tableName, $dbAdapter, null, $resultSetPrototype);

        return new \Dbset\Cust\CustextraattributeTable($tableGateway);
    }


}

