<?php

namespace Starchitect\Throwing;

/**
 * Thrown when an application attempts to use null in a case 
 * where an object is required.
 */
class NullPointerException extends \RuntimeException
{

    /**
     * Creates a NullPointerException with the optional specified 
     * detail message.
     * 
     * @param string $message the detail message.
     */
    public function __construct($message = '')
    {
        parent::__construct($message);
    }
	
}