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

class Square extends AbstractQuadrilateral
{

   /**
    * @param integer $length a as input to set values of the side of quadrilateral- Square.
    *
    * @throws Exception when there are null values in  $length
    */
   public function __construct($length)
    {
      $this->side1 =$length;
      $this->side2 =$length;
      $this->side3 =$length;
      $this->side4 =$length;
    }

    /**
     * @return integer Area value.
     */
    public function getArea()
    {
      return  $this->side1 * $this->side2;
    }

    /**
     * @return integer length value.
     */
    public function getLength()
    {
      return $this->side1;
    }

    /**
     * @param integer $value to set sides of length.
     */
    public function setLength($length)
    {
      $this->side1 =$length;
      $this->side2 =$length;
      $this->side3 =$length;
      $this->side4 =$length;
    }

    /**
     * @param integer $factor  value to be mutiplied with the length of the square
     *        to get scale up/scale down shape.
     */
    public function scaleByfactor($factor)
    {
      $this->side1 = $this->side1 * $factor;
      $this->side2 = $this->side2 * $factor;
      $this->side3 = $this->side3 * $factor;
      $this->side4 = $this->side4 * $factor;
    }
}
