<?php

declare(strict_types=1);

namespace TimurFlush\GeoDetector\Tests\Adapter\SypexAPI;

use PHPUnit\Framework\TestCase;
use TimurFlush\GeoDetector\Adapter\SypexAPI;

class ProvideCountryTest extends TestCase
{
    use ClientAddressProvider;

    /**
     * @dataProvider clientAddressProvider
     */
    public function testProvidingCountry(string $ip, array $expected)
    {
        $adapter = new SypexAPI();

        $expected = $expected['country']['iso'];
        $actual   = $adapter->provideCountryCode($ip);

        $this->assertEquals($expected, $actual);
    }
}
