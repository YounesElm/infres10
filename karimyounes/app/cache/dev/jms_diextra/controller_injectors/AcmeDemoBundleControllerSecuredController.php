<?php

namespace Acme\DemoBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class SecuredController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/dev/security_project/symfony/app/cache/dev/jms_diextra/proxies/Acme-DemoBundle-Controller-SecuredController.php';
        $a = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Acme\\DemoBundle\\Controller\\SecuredController' => array('helloadminAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy_72114c0f8683bcc2a66ceccb136abe5a78f8577e\__CG__\Acme\DemoBundle\Controller\SecuredController();
        $instance->__CGInterception__setLoader($a);
        return $instance;
    }
}
