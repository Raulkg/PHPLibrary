<?php
/**
 * This file is part of the Gshape package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Gshape;

use Gshape\AbstractTriangle;


/**
 * @author Rahulkumar Gaddam<rgaddam@syr.edu>
 */
class RightTriangle extends AbstractTriangle
{
    public $side1,$side2,$side3;

    /**
     * @param integer $length and $radius  as input to set values of the quadrilateral.
     *
     * @throws Exception when there are null values in both $length and $breadth
     */
    public function __construct($side1,$side2)
    {
      $this->side1 =$side1;
      $this->side2 =$side2;
      $this->side3 = sqrt($side1 * $side1 + $side2 * $side2);
    }

    /**
     * @return integer Area value.
     */
    public function getArea()
    {
      return ($this->side1 * $this->side2 )/2;
    }

    /**
     * @param integer $factor  value to be mutiplied with the length of the right triangle
     *        to get scale up/scale down shape.
     */
    public function scaleByfactor($factor)
    {
      $this->side1 = $this->side1 * $factor;
      $this->side2 = $this->side2 * $factor;
      $this->side3 = sqrt($this->side1 * $this->side1 + $this->side2 * $this->side2);
    }
}
