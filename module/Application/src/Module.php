<?php

declare(strict_types=1);

namespace Application;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\Mvc\MvcEvent;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\EventManager\EventInterface;
use Laminas\ModuleManager\Feature\BootstrapListenerInterface;

class Module
{
    public function getConfig(): array
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/module.config.php';
        return $config;
    }

    public function onBootstrap(EventInterface $e) {
        $application = $e->getApplication();


        //$sm = $application->getServiceManager();
        $application->getEventManager()->attach(MvcEvent::EVENT_DISPATCH, function(MvcEvent $e) use ($application) {
            $validLogin = false;
            $router = $e->getRouteMatch();
            $action = $router->getParam('action');

            if($action != 'login' && $action != 'logout'){
                if(isset($_COOKIE['id_staff']) && !empty($_COOKIE['id_staff'])){
                    $validLogin = true;
                }
            }
            else{
                $validLogin = true;
            }

            if(!$validLogin){

                $url = '/login';
                $response = $e->getResponse();
                $response->setStatusCode(302);
                $response->getHeaders()->addHeaderLine('Location', $url);
                $response->sendHeaders();

                return $response;

            }

            $viewModel = $e->getViewModel();
//            $this->setLoggedInUserName($viewModel);

            return;
        }, 100);

    }



}
