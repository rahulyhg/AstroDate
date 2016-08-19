<?php

namespace Marando\AstroDate;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-17 at 00:17:08.
 */
class YearTypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers Marando\AstroDate\YearType::Julian
     */
    public function testJulian()
    {
        $this->assertEquals(365.25, YearType::Julian()->days);
    }

    /**
     * @covers Marando\AstroDate\YearType::Besselian
     */
    public function testBesselian()
    {
        $this->assertEquals(
          365.242198781, YearType::Besselian()->days, '', 1e-9);
    }

}
