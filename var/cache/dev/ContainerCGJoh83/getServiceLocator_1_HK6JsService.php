<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.1.HK6Js' shared service.

return $this->privates['service_locator.1.HK6Js'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('log' => function () {
    return ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());
}));
