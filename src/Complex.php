<?php

namespace koktut\complex;

/**
 * Class Complex
 * @package koktut\complex
 */
class Complex
{
    /**
     * @var float
     */
    protected $realPart;

    /**
     * @var float
     */
    protected $imaginaryPart;

    /**
     * Complex constructor.
     * @param $realPart
     * @param $imaginaryPart
     */
    public function __construct($realPart = 0, $imaginaryPart = 0)
    {
        $this->realPart = $realPart;
        $this->imaginaryPart = $imaginaryPart;
    }

    /**
     * @return float
     */
    public function getRealPart()
    {
        return $this->realPart;
    }

    /**
     * @return float
     */
    public function getImaginaryPart()
    {
        return $this->imaginaryPart;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('test');
    }

    /**
     * @param Complex $complex
     */
    public function add(Complex $complex)
    {

    }

    /**
     * @param Complex $complex
     */
    public function sub(Complex $complex)
    {

    }

    /**
     * @param Complex $complex
     */
    public function mul(Complex $complex)
    {

    }

    /**
     * @param Complex $complex
     */
    public function div(Complex $complex)
    {

    }
}