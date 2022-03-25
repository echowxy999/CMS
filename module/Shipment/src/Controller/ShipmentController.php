<?php

namespace Shipment\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Controller\AppController;
use Laminas\Session\SaveHandler\Cache;



use Dbset\Staff\StafflistTable;

class ShipmentController extends AbstractActionController
{
    public function shipmentAction(){

        $viewModel = new ViewModel([
            'title' => 'Shipment',
            'bc' => 'Shipment',
            'pageScriptFile' => '<script src="/assets/js/app/customer-extra-attribute.js"></script>'
        ]);
        $viewModel->setTerminal(true);
        return $viewModel;

    }

}