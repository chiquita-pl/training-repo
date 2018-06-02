<?php

use App\Driver;

class DriverTest extends \PHPUnit\Framework\TestCase
{
    public function testGetDriverName()
    {
        $driver = new Driver();
        $this->assertSame('Bob', $driver->getDriverName());
    }
}
