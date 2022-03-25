<?php

namespace Staff\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Controller\AppController;
use Laminas\Session\SaveHandler\Cache;



use Dbset\Staff\StafflistTable;

class StaffController extends AbstractActionController
{
    protected  $stafflistSet;
    public function __construct(StafflistTable $stafflistSet)
    {
        $this->stafflistSet = $stafflistSet;
    }


    public function loginAction()
    {

        if(isset($_COOKIE['id_staff']) && !empty($_COOKIE['id_staff'])){
            return $this->redirect()->toUrl("/customer/customer-list");
        }

        if($this->getRequest()->isPost()){
            $email = $this->getRequest()->getPost('emailaddress');
            $passWord = $this->getRequest()->getPost('password');
            $remember = $this->getRequest()->getPost('rememberMe');

            $userLine = $this->stafflistSet->fetchAccountByEmail($email);


            if($userLine){
                $verifyResult = password_verify($passWord,$userLine->passwordStaff);

                if($verifyResult){

                    if($remember)
                    {
                        setcookie('id_staff', strval($userLine->id), time() + 60*60*24*30, "/", $_SERVER["SERVER_NAME"]);
                        setcookie('name_staff', $userLine->nameStaff, time() + 60*60*24*30, "/", $_SERVER["SERVER_NAME"]);

                    }
                    else{
                        setcookie('id_staff', strval($userLine->id), time() + 60*60*24, "/", $_SERVER["SERVER_NAME"]);
                        setcookie('name_staff', $userLine->nameStaff, time() + 60*60*24, "/", $_SERVER["SERVER_NAME"]);
                    }

                    return $this->redirect()->toUrl("/customer");
                }
                else{
                    $errorMessage = "Incorrect username or password";
                }

            }else{
                $errorMessage = "Incorrect username or password";

            }
        }

        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;



    }

    public function logoutAction(){
        setcookie('id_staff', '', time() - 86400, "/", $_SERVER["SERVER_NAME"]);
        setcookie('name_staff', '', time() - 86400, "/", $_SERVER["SERVER_NAME"]);
        return $this->redirect()->toUrl("/login");
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}