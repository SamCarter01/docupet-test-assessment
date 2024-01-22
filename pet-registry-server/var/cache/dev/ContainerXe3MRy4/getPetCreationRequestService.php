<?php

namespace ContainerXe3MRy4;

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
        include_once \dirname(__DIR__, 4).'/src/Request/PetCreationRequest.php';

        return $container->privates['App\\Request\\PetCreationRequest'] = new \App\Request\PetCreationRequest();
    }
}
