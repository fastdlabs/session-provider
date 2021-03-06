<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2018
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace FastD\SessionProvider;


use FastD\Http\Response;
use FastD\Middleware\DelegateInterface;
use FastD\Middleware\Middleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use FastD\Session\Session;

/**
 * Class SessionMiddleware
 * @package FastD\Session
 */
class SessionMiddleware extends Middleware
{
    /**
     * @param ServerRequestInterface $request
     * @param DelegateInterface $next
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request, DelegateInterface $next)
    {
        Session::start(app()->get('request'));

        $response = $next->process($request);

        if ($response instanceof Response) {
            return $response->withCookie('session-id', session()->getSessionId(), null, '/');
        }

        return $response;
    }
}