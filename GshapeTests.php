<?php
namespace Gshape\Tests;
use Gshape;
class GshapeTests extends TestCase
{
    public function testReadWithNullContent()
    {
        $email = new Gshape\Rectangle(0,0);
        $this->assertInstanceOf('Gshape\Rectangle', $email);
        $this->assertEmpty($email->getArea());
    }

}
