<?php
/**
 * This file is part of the Gshape package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Gshape;

use Gshape\AbstractQuadrilateral;

/**
 * @author Rahulkumar Gaddam<rgaddam@syr.edu>
 */
class Parallelogram extends AbstractQuadrilateral
{
    public $objHeight;

    /**
     * @param integer values of the both sides of Parallelogram and perpendicular height.
     *
     * @throws exception if the signature of constructor fails or null values are provided.
     */
    public function __construct($base, $slantHeight ,$height )
    {
    if($base && $height && $slantHeight )
    {
      $this->side1 = $base;
      $this->side2 =  $slantHeight;
      $this->side3 =  $base;
      $this->side4 =  $slantHeight;
      $this->objHeight = $height;
    }
    else
        {
           throw new \Exception("Could not create Paralellogram Object one or more parameters are missing. solution:  Parallelogram(<base>,<SlantHeight>,<height>)");
        }
    }

    /**
     * @return integer value of the Area.
     */
    public function getArea()
    {
      return  $this->side1 * $this->objHeight ;
    }

    /**
     * @return integer value in the base .
     */
    public function getBase()
    {
      return $this->base;
    }

    /**
     * @param integer $length to set value of base .
     */
    public function setBase($length)
    {
      $this->base =$length;
    }

    /**
     * @return integer height value.
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param integer $length to set value of height.
     */
    public function setHeight($length)
    {
      $this->height =$length;
    }

    /**
     * @param integer $factor that needs to be multiplied to all the sides..
     */
    public function scaleByfactor($factor)
    {
      $this->side1 = $this->side1 * $factor;
      $this->side2 = $this->side2 * $factor;
      $this->side3 = $this->side3 * $factor;
      $this->side4 = $this->side4 * $factor;
      $this->objHeight = $this->objHeight * $factor;
    }
}
