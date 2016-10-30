<?php
/**
 * This file is part of the Gshape package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Gshape;

use Gshape\GshapeInterface;

/**
 * @author Rahulkumar Gaddam<rgaddam@syr.edu>
 */
abstract class AbstractTriangle implements GshapeInterface
{
    public $side1,$side2,$side3;

    /**
     * @param strings $side1,$side2,$side3 are lengths of this Abstract Triangle.
     *
     *
     */
    public function _construct($side1,$side2,$side3)
    {
      $this->side1 =$side1;
      $this->side2 =$side2;
      $this->side3 =$side3;
    }

    abstract public function getArea();
    abstract public  function scaleByfactor($factor);

    /**
     *
     * @return integer value of calculation i.e, perimeter = sum of all sides.
     */
    public function getPerimeter()
    {
             return $this->side1+$this->side2+$this->side3;
    }
}
