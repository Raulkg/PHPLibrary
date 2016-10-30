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
class CircleShape  implements GshapeInterface
{
    public $radius;

    /**
     * @param integer $radius as input to store in class variable radius.
     *
     *
     */
   function __construct($radius)
    {
      $this->radius =$radius;
    }

    /**
     * @param integer $radius as input to set variable radius.
     */
    public function setRadius($radius)
    {
      $this->radius = $radius;
    }

    /**
     * @return integer $radius as input to get variable radius.
     */
    public function getArea()
    {
      return $this->radius * $this->radius * M_PI;
    }

    /**
     * @return integer after calculation 2*PI*$radius.
     */
    public function getPerimeter()
    {
        return 2 * M_PI * $this->radius;
    }

    /**
     * @param integer $factor multiplies radius to scaleup or down the shape.
     */
    public function scaleByfactor($factor)
    {
        $this->radius = $this->radius * $factor;
    }
}
