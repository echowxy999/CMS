<?php
namespace Dbset\Cust\Factory;

use Interop\Container\ContainerInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\Db\Adapter\AdapterInterface;

class CustcustomerTableFactory implements FactoryInterface
{

    private $_tableName = 'cust_customer';

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $dbAdapter = $container->get(AdapterInterface::class);

        $resultSetPrototype = new ResultSet();

        $resultSetPrototype->setArrayObjectPrototype(new \Model\Cust\Custcustomer());

        $tableGateway =  new TableGateway($this->_tableName, $dbAdapter, null, $resultSetPrototype);

        return new \Dbset\Cust\CustcustomerTable($tableGateway);
    }


}