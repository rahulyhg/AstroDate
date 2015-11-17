<?php

/*
 * Copyright (C) 2015 ashley
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

namespace Marando\AstroDate;

class TimeScale {

  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public static function parse($str) {
    switch (strtoupper($str)) {
      case 'UTC':
        return static::UTC();

      case 'TT':
        return static::TT();
    }
  }

  public static function UTC() {
    return new static('UTC');
  }

  public static function TAI() {
    return new static('TAI');
  }

  public static function TT() {
    return new static('TT');
  }

  public static function UT1() {
    return new static('UT1');
  }

  public static function TDB() {
    return new static('TDB');
  }

  public function __toString() {
    return $this->name;
  }

}