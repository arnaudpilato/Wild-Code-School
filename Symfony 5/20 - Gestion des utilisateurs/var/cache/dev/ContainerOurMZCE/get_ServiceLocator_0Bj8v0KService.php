<?php

namespace ContainerOurMZCE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0Bj8v0KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0Bj8v0K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0Bj8v0K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'slugify' => ['privates', 'App\\Service\\Slugify', 'getSlugifyService', true],
        ], [
            'mailer' => '?',
            'slugify' => 'App\\Service\\Slugify',
        ]);
    }
}
