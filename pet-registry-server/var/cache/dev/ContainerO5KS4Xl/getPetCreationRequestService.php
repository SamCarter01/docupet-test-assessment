<?php

namespace ContainerO5KS4Xl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPetCreationRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Request\PetCreationRequest' shared autowired service.
     *
     * @return \App\Request\PetCreationRequest
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service "App\\Request\\PetCreationRequest": argument "$petName" of method "__construct()" is type-hinted "string", you should configure its value explicitly.');
    }
}