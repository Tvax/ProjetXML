<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.yaml_lint' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/yaml/Command/LintCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

$this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

$instance->setName('lint:yaml');

return $instance;
