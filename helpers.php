<?php

use FastD\Http\ServerRequest;
use FastD\Session\AbstractSessionHandler;
use FastD\Session\Session;

/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2019
 *
 * @see      https://www.github.com/fastdlabs
 * @see      http://www.fastdlabs.com/
 */

/**
 * @param ServerRequest|null $serverRequest
 * @param AbstractSessionHandler|null $handler
 * @return Session
 */
function session (ServerRequest $serverRequest = null, AbstractSessionHandler $handler = null) {
    if (null === $serverRequest) {
        $serverRequest = app()->get('request');
    }

    return Session::start($serverRequest, $handler);
}