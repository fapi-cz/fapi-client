<?php declare(strict_types = 1);

namespace Fapi\FapiClient;

/**
 * The exception that is thrown when a method call is invalid for the object's
 * current state, method has been invoked at an illegal or inappropriate time.
 */
class InvalidStateException extends RuntimeException
{

}
