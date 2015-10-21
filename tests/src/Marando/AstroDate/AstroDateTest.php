<?php

namespace Marando\AstroDate;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-10-21 at 03:18:18.
 */
class AstroDateTest extends \PHPUnit_Framework_TestCase {

  /**
   * @covers Marando\AstroDate\AstroDate::jd
   */
  public function testJd() {
    $dates = [
        // Date, JD0h, JD
        ['2000-Jan-01 00:00:00', 2451544.500000],
        ['2100-Oct-12 18:20:04', 2488354.263935],
        ['2089-Nov-08 21:14:18', 2484364.3849301],
    ];

    foreach ($dates as $d) {
      $fromJD  = AstroDate::jd($d[1]);
      $fromStr = AstroDate::parse($d[0]);

      $this->assertEquals($fromStr, $fromJD, $fromJD, 1e-1);
    }
  }

  /**
   * @covers Marando\AstroDate\AstroDate::parse
   * @todo   Implement testParse().
   */
  public function testParse() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::now
   * @todo   Implement testNow().
   */
  public function testNow() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::__get
   * @todo   Implement test__get().
   */
  public function test__get() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::__set
   * @todo   Implement test__set().
   */
  public function test__set() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::toUTC
   * @todo   Implement testToUTC().
   */
  public function testToUTC() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::toTAI
   * @todo   Implement testToTAI().
   */
  public function testToTAI() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::toTT
   * @todo   Implement testToTT().
   */
  public function testToTT() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::toTDB
   * @todo   Implement testToTDB().
   */
  public function testToTDB() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::diff
   * @todo   Implement testDiff().
   */
  public function testDiff() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::add
   * @todo   Implement testAdd().
   */
  public function testAdd() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::subtract
   * @todo   Implement testSubtract().
   */
  public function testSubtract() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::sinceMidnight
   * @todo   Implement testSinceMidnight().
   */
  public function testSinceMidnight() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::untilMidnight
   * @todo   Implement testUntilMidnight().
   */
  public function testUntilMidnight() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::formatDefault
   * @todo   Implement testFormatDefault().
   */
  public function testFormatDefault() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::formatJPL
   * @todo   Implement testFormatJPL().
   */
  public function testFormatJPL() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

  /**
   * @covers Marando\AstroDate\AstroDate::__toString
   * @todo   Implement test__toString().
   */
  public function test__toString() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
            'This test has not been implemented yet.'
    );
  }

}
