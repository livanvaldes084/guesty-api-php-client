<?php

require(__DIR__ . '/../src/GuestyApiClient.php');

use Guesty\GuestyApiPhpClient\GuestyApiClient;

/**
 *  Corresponding Class to test YourClass class
 *
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 *
 * @author Ing.Livan Alejandro Capote Valdés <livanvaldes084@gmail.com>
 */
class GuestyApiClientTest extends PHPUnit_Framework_TestCase
{
    private $object;

    public function setUp()
    {
        $this->object = new GuestyApiClient();
    }

    public function testIsThereAnySyntaxError()
    {
        $this->assertTrue(is_object($this->object));
    }
}