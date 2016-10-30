<?php
/**
 * This file is part of the Gshape library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */
 namespace Gshape;

/**
 * @author Rahulkumar Gaddam<rgaddam@syr.edu>
 */
interface GshapeInterface
{
    public function getArea();
    public function getPerimeter();
    public function scaleByfactor($factor);
}
