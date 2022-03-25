<?php

declare(strict_types=1);

namespace Application\Controller;
use Dbset\Cust\CustcustomerTable;
use Dbset\Cust\CustextraattributeTable;
use Dbset\Sys\SysdashboardTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected  $sysdashboardSet, $custcustomerSet, $custextraattributeSet;

    public function __construct(SysdashboardTable $sysdashboardSet, CustcustomerTable $custcustomerSet, CustextraattributeTable $custextraattributeSet)
    {
        $this->sysdashboardSet = $sysdashboardSet;
        $this->custcustomerSet = $custcustomerSet;
        $this->custextraattributeSet = $custextraattributeSet;

    }

    public function indexAction()
    {

        if (isset ($_POST ['btn_call_api'])) {

            $websiteList = $this->custextraattributeSet->fetchByAttributeId(16);

            $this->sysdashboardSet->callCpCountAPI($websiteList);
        }

        $dashboardList = $this->sysdashboardSet->fetchDashboardData();


        $customerList = $this->custcustomerSet->fetchAllByField('is_active',1);
        $dashboardData = array();
        $dashboardHeader = array();


        foreach ($customerList as $customer){
            $dashboardData[$customer->id]["custName"] = $customer->companyNameCust;
        }

        foreach ($dashboardList as $data){
            $dashboardData[$data["cust_id"]][$data["date"]] = $data;
            $dashboardHeader[$data["date"]] = $data["date"];
        }




        $viewModel = new ViewModel([
            'title' => 'Dashboard',
            'tableHeader' => $dashboardHeader,
            'dashboardData' => $dashboardData
        ]);
        $viewModel->setTerminal(true);
        return $viewModel;
    }

}
