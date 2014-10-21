<?php

namespace Prewk\CoordTransform\Positions;

/**
 *  CoordinateTransformationLibrary - David Gustafsson 2012
 *
 *  RT90, SWEREF99 and WGS84 coordinate transformation library
 *
 * This library is a PHP port of the .NET library by Björn Sållarp.
 *  calculations are based entirely on the excellent
 *  javscript library by Arnold Andreassons.
 *
 * Source: http://www.lantmateriet.se/geodesi/
 * Source: Arnold Andreasson, 2007. http://mellifica.se/konsult
 * Source: Björn Sållarp. 2009. http://blog.sallarp.com
 * Source: Mathias Åhsberg, 2009. http://github.com/goober/
 * Author: David Gustafsson, 2012. http://github.com/david-xelera/
 *
 * License: http://creativecommons.org/licenses/by-nc-sa/3.0/
 */

abstract class SWEREFProjection {
  const sweref_99_tm = 0;
  const sweref_99_12_00 = 1;
  const sweref_99_13_30 = 2;
  const sweref_99_15_00 = 3;
  const sweref_99_16_30 = 4;
  const sweref_99_18_00 = 5;
  const sweref_99_14_15 = 6;
  const sweref_99_15_45 = 7;
  const sweref_99_17_15 = 8;
  const sweref_99_18_45 = 9;
  const sweref_99_20_15 = 10;
  const sweref_99_21_45 = 11;
  const sweref_99_23_1 = 12;
}
