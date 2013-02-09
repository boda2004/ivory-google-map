<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Exception;

/**
 * Base exception.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class BaseException extends Exception
{
    /**
     * Gets the "INVALID BOUND NORTH EAST" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID BOUND NORTH EAST" exception.
     */
    static public function invalidBoundNorthEast()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The north east setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setNorthEast(Ivory\GoogleMap\Base\Coordinate $northEast)',
            ' - function setNorthEast(double $latitude, double $longitude, boolean $noWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID BOUND SOUTH WEST" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID BOUND SOUTH WEST" exception.
     */
    static public function invalidBoundSouthWest()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The south west setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setSouthWest(Ivory\GoogleMap\Base\Coordinate $southWest)',
            ' - function setSouthWest(double $latitude, double $longitude, boolean $noWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID COORDINATE LATITUDE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID COORDINATE LATITUDE" exception.
     */
    static public function invalidCoordinateLatitude()
    {
        return new static('The latitude of a coordinate must be a numeric value.');
    }

    /**
     * Gets the "INVALID COORDINATE LONGITUDE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID COORDINATE LONGITUDE" exception.
     */
    static public function invalidCoordinateLongitude()
    {
        return new static('The longitude of a coordinate must be a numeric value.');
    }

    /**
     * Gets the "INVALID COORDINATE NO WRAP" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID COORDINATE NO WRAP" exception.
     */
    static public function invalidCoordinateNoWrap()
    {
        return new static('The no wrap coordinate property must be a boolean value.');
    }

    /**
     * Gets the "INVALID POINT X" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID POINT X" exception.
     */
    static public function invalidPointX()
    {
        return new static('The x coordinate of a point must be a numeric value.');
    }

    /**
     * Gets the "INVALID POINT Y" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID POINT Y" exception.
     */
    static public function invalidPointY()
    {
        return new static('The y coordinate of a point must be a numeric value.');
    }

    /**
     * Gets the "INVALID SIZE HEIGHT" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID SIZE HEIGHT" exception.
     */
    static public function invalidSizeHeight()
    {
        return new static('The height of a size must be a numeric value.');
    }

    /**
     * Gets the "INVALID SIZE HEIGHT UNIT" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID SIZE HEIGHT UNIT" exception.
     */
    static public function invalidSizeHeightUnit()
    {
        return new static('The height unit of a size must be a string value.');
    }

    /**
     * Gets the "INVALID SIZE WIDTH" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID SIZE WIDTH" exception.
     */
    static public function invalidSizeWidth()
    {
        return new static('The width of a size must be a numeric value.');
    }

    /**
     * Gets the "INVALID SIZE WIDTH UNIT" exception.
     *
     * @return \Ivory\GoogleMap\Exception\BaseException The "INVALID SIZE WIDTH UNIT" exception.
     */
    static public function invalidSizeWidthUnit()
    {
        return new static('The width unit of a size must be a string value.');
    }
}
