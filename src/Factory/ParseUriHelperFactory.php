<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 20/12/2017
 * Time: 18:08
 */

namespace Application\Factory;

use Application\Router\ParseUriHelper;
use Application\Router\ParseUriStaticNameHelper;


class ParseUriHelperFactory
{
    /**
     * @return ParseUriHelper
     */
    public function  __invoke() : ParseUriHelper
    {
       return new ParseUriStaticNameHelper();
    }
}