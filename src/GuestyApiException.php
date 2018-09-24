<?php

namespace Guesty\GuestyApiPhpClient;

/**
 * Class GuestyApiException
 *
 * @package Guesty\GuestyApiPhpClient
 * @author Ing.Livan Alejandro Capote Valdés <livanvaldes084@gmail.com>
 */
class GuestyApiException extends \Exception
{
    function __construct($errors, $statusCode)
    {
        parent::__construct('Guesty Api Exception: ' . json_encode($errors), $statusCode);
    }
}