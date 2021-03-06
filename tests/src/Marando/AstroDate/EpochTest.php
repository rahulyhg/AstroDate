<?php

namespace Marando\AstroDate;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-17 at 01:13:07.
 */
class EpochTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers Marando\AstroDate\Epoch::jd
     */
    public function testJd()
    {
        $J2000 = Epoch::jd(2451545.0);
        $this->assertEquals(2000, $J2000->year);
        $this->assertEquals(YearType::Julian(), $J2000->type);
        $this->assertEquals(2451545.0, $J2000->jd);
    }

    /**
     * @covers Marando\AstroDate\Epoch::dt
     */
    public function testDt()
    {
        $dt    = AstroDate::jd(2451545.0, TimeScale::TT());
        $J2000 = Epoch::dt($dt);
        $this->assertEquals(2000, $J2000->year);
        $this->assertEquals(YearType::Julian(), $J2000->type);
        $this->assertEquals(2451545.0, $J2000->jd);
    }

    /**
     * @covers Marando\AstroDate\Epoch::J
     */
    public function testJ()
    {
        $epoch = Epoch::J(1900);
        $this->assertEquals(1900, $epoch->year);
        $this->assertEquals(YearType::Julian(), $epoch->type);
        $this->assertEquals(2415020.0, $epoch->jd);
    }

    /**
     * @covers Marando\AstroDate\Epoch::B
     */
    public function testB()
    {
        $epoch = Epoch::B(1950);
        $this->assertEquals(1950, $epoch->year);
        $this->assertEquals(YearType::Besselian(), $epoch->type);
        $this->assertEquals(2433282.4235, $epoch->jd, 'jd', 1e-4);
    }

    /**
     * @covers Marando\AstroDate\Epoch::JMod
     */
    public function testJMod()
    {
        $epoch = Epoch::JMod();
        $this->assertEquals(YearType::Julian(), $epoch->type);
        $this->assertEquals(2400000.5, $epoch->jd, 'jd', 1e-4);
    }

    /**
     * @covers Marando\AstroDate\Epoch::J1900
     */
    public function testJ1900()
    {
        $epoch = Epoch::J1900();
        $this->assertEquals(1900, $epoch->year);
        $this->assertEquals(YearType::Julian(), $epoch->type);
        $this->assertEquals(2415020.0, $epoch->jd, 'jd', 1e-4);
    }

    /**
     * @covers Marando\AstroDate\Epoch::J2000
     */
    public function testJ2000()
    {
        $epoch = Epoch::J2000();
        $this->assertEquals(2000, $epoch->year);
        $this->assertEquals(YearType::Julian(), $epoch->type);
        $this->assertEquals(2451545.0, $epoch->jd, 'jd', 1e-4);
    }

    /**
     * @covers Marando\AstroDate\Epoch::B1900
     */
    public function testB1900()
    {
        $epoch = Epoch::B1900();
        $this->assertEquals(1900, $epoch->year);
        $this->assertEquals(YearType::Besselian(), $epoch->type);
        $this->assertEquals(2415020.31352, $epoch->jd, 'jd', 1e-4);
    }

    /**
     * @covers Marando\AstroDate\Epoch::B1950
     */
    public function testB1950()
    {
        $epoch = Epoch::B1950();
        $this->assertEquals(1950, $epoch->year);
        $this->assertEquals(YearType::Besselian(), $epoch->type);
        $this->assertEquals(2433282.4235, $epoch->jd, 'jd', 1e-4);
    }

    /**
     * @covers Marando\AstroDate\Epoch::toDate
     */
    public function testToDate()
    {
        $dt       = Epoch::J2000()->toDate();
        $expected = AstroDate::jd(2451545.0, TimeScale::TT());
        $this->assertEquals($expected->toJD(), $dt->toJD());
    }

}
