<?php
namespace EdpModuleLayouts;

class Module
{
    public function onBootstrap($e)
    {
        $shared_man = $e->getApplication()->getEventManager()->getSharedManager();
        $shared_man->attach(['Zend\Mvc\Controller\AbstractRestfulController', 'Zend\Mvc\Controller\AbstractActionController'],
                            'dispatch', function($e) {
            $controller      = $e->getTarget();
            $controllerClass = get_class($controller);
            $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
            $config          = $e->getApplication()->getServiceManager()->get('config');
            if (isset($config['module_layouts'][$moduleNamespace])) {
                $controller->layout($config['module_layouts'][$moduleNamespace]);
            }
        }, 100);
    }
}
