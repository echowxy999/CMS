<?php
namespace Dbset\Sys;

use Dbset\Cust\CustextraattributeTable;
use Model\Sys\Sysdashboard;

class SysdashboardTable extends \Dbset\Sys\Abstraction\SysdashboardTable
{
    public function fetchDashboardData()
    {
        $date = date("Y-m-d");
        $enddate = date('Y-m-d', strtotime('-1 day', strtotime($date)));
        $startdate = date('Y-m-d', strtotime('-30 days', strtotime($enddate)));

        $whereStr = "date >= '".$startdate."' and date <= '".$enddate."'";
        $rowSet = $this->listAll($whereStr,'date DESC');



        return $rowSet->toArray();

    }

    public function callCpCountAPI($websiteList)
    {

        $actionUrl = "v3_api/get-count";
        $day = 28;
        $month = 2;
        $year = 2022;

        while($day > 0){
            $useDate[] = $year.'-'.$month.'-'.$day;
            $day = $day - 1;
        }

        $useDate[] = '2022-01-31';
        $useDate[] = '2022-03-01';


        foreach ($websiteList as $key => $website){
            foreach($useDate as $date){

                $arrJson = file_get_contents($website.$actionUrl.'/date/'.$date);

                $arrStr = json_decode($arrJson);

                $dashboardList = new Sysdashboard();
                $dashboardList->setDate($date);
                $dashboardList->setCustId($key);
                $dashboardList->setHoldCount($arrStr->holdTotal);
                $dashboardList->setNotletterImportCount($arrStr->notLetterTotal);
                $dashboardList->setCpImportCount($arrStr->cpTotal);

                $this->add($dashboardList);
            }

        }

    }

}