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
class EquilateralTriangle extends AbstractTriangle
{
    public $side1,$side2,$side3;

    /**
     * @param integer $side as input to set value to all three sides as it is equal in EquilateralTriangle.
     */
    function __construct($side1)
    {
      $this->side1 =$side1;
      $this->side2 =$side1;
      $this->side3 = $side1;
    }

    /**
     * @return integer value of Area.
     */
    public function getArea()
    {
      return number_format((sqrt(3)/4)*pow($this->side1,2),2);
    }

    /**
     * @param integer $factor that needs to be multiplied to all the sides.
     */
    public function scaleByfactor($factor)
    {
      $this->side1 = $this->side1 * $factor;
      $this->side2 = $this->side2 * $factor;
      $this->side3 = $this->side3 * $factor;

    }
}
