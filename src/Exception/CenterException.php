<?php

namespace Gupo\MiddleOfficeMr\Exception;

use Exception;
class CenterException extends Exception
{
    /**
     * @param $errorMessage
     * @param $errorCode
     * @param $previous
     */
    public function __construct($errorMessage, $errorCode = 0, $previous = null)
    {
        parent::__construct($errorMessage, $errorCode, $previous);
    }

}