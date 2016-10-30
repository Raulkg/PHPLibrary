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
class Rectangle extends AbstractQuadrilateral
{
   /**
    * @param integer $length and $radius  as input to set values of the quadrilateral.
    *
    * @throws Exception when there are null values in both $length and $breadth
    */
    public function __construct($length, $breadth)
    {
    if($length && $breadth)
    {
      $this->side1 =$length;
      $this->side2 =$breadth;
      $this->side3 =$length;
      $this->side4 =$breadth;
      }
     else{
        throw new \Exception("Could not create Rectangle Object one or more parameters are missing. solution:  Rectangle(<length>,<breadth>)");
     }
    }

   /**
    * @return integer Area value.
    */
    public function getArea()
    {
      return  $this->side1 * $this->side2 ;
    }

   /**
    * @return integer length value.
    */
    public function getLength()
    {
      return $this->side1;
    }

   /**
    * @return integer breadth value.
    */
    public function getBreadth()
    {
      return $this->side2;
    }

   /**
    * @param integer $value to set sides of length .
    */
    public function setLength($value)
    {
      $this->side1 = $value;
      $this->side3 = $value;
    }

   /**
    * @param integer $value to set sides of breadth.
    */
    public function setBreadth($value)
    {
      $this->side2 = $value;
      $this->side4 = $value;
    }

   /**
    * @param integer $factor  value to be mutiplied with the length of the rectangle
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
