<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 23/12/2017
 * Time: 23:08
 */

namespace Application\Controller;

use Throwable;

class ErrorController
{
    private $exception;

    public function __construct(Throwable $exception)
    {
        $this->exception = $exception;
    }

    public function  error404Action() : string
    {
        ob_start();
        include __DIR__.'/../../views/error404.phtml';
        return ob_get_clean();
    }

    public function  error500Action() : string
    {
        ob_start();
        include __DIR__.'/../../views/error500.phtml';
        return ob_get_clean();
    }
}