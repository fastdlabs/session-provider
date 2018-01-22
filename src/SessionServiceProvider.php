<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2018
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace FastD\SessionProvider;


use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;

/**
 * Class SessionServiceProvider
 * @package FastD\Session
 */
class SessionServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function register(Container $container)
    {
        app()->get('dispatcher')->before(new SessionMiddleware());
    }
}