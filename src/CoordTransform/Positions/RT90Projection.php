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

abstract class RT90Projection {
    const rt90_7_5_gon_v = 0;
    const rt90_5_0_gon_v = 1;
    const rt90_2_5_gon_v = 2;
    const rt90_0_0_gon_v = 3;
    const rt90_2_5_gon_o = 5;
    const rt90_5_0_gon_o = 6;
}
