<?php

use PHPUnit\Framework\TestCase;
use koktut\complex\Complex;

class ComplexTest extends TestCase
{
    public function testCreateComplex()
    {
        $complex = new Complex(1, 2);

        $this->assertEquals(1, $complex->getRealPart());
        $this->assertEquals(2, $complex->getImaginaryPart());
    }

    public function testToString()
    {
        $this->assertEquals('1+2i', '' . new Complex(1, 2));
        $this->assertEquals('1-2i', '' . new Complex(1, -2));
        $this->assertEquals('1', '' . new Complex(1));
    }

    public function testAdd()
    {
        $complex = new Complex(1, 2);

        $complex->add(new Complex(3, 4));

        $this->assertEquals(4, $complex->getRealPart());
        $this->assertEquals(6, $complex->getImaginaryPart());
    }

    public function testSub()
    {
        $complex = new Complex(1, 2);

        $complex->sub(new Complex(3, 4));

        $this->assertEquals(-2, $complex->getRealPart());
        $this->assertEquals(-2, $complex->getImaginaryPart());
    }

    public function testMul()
    {
        $complex = new Complex(1, 2);

        $complex->mul(new Complex(3, 4));

        $this->assertEquals(-5, $complex->getRealPart());
        $this->assertEquals(10, $complex->getImaginaryPart());
    }

    public function testDiv()
    {
        $complex = new Complex(1, 2);

        $complex->div(new Complex(3, 4));

        $this->assertEquals(0.44, $complex->getRealPart());
        $this->assertEquals(0.08, $complex->getImaginaryPart());
    }
}
