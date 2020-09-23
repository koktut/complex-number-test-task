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
     *
     * @param float $realPart
     * @param float $imaginaryPart
     */
    public function __construct($realPart = 0.0, $imaginaryPart = 0.0)
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
    public function format()
    {
        $str = '' . $this->realPart;

        if ($this->imaginaryPart) {
            $str .= ($this->imaginaryPart > 0 ? '+' : '') . $this->imaginaryPart . 'i';
        }

        return $str;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format();
    }

    /**
     * @param Complex $complex
     */
    public function add(Complex $complex)
    {
        $this->realPart += $complex->getRealPart();
        $this->imaginaryPart += $complex->getImaginaryPart();
    }

    /**
     * @param Complex $complex
     */
    public function sub(Complex $complex)
    {
        $this->realPart -= $complex->getRealPart();
        $this->imaginaryPart -= $complex->getImaginaryPart();
    }

    /**
     * @param Complex $complex
     */
    public function mul(Complex $complex)
    {
        $realPart = ($this->realPart * $complex->getRealPart()) -
            ($this->imaginaryPart * $complex->getImaginaryPart());

        $imaginaryPart = ($this->getRealPart() * $complex->getImaginaryPart()) +
            ($this->imaginaryPart * $complex->getRealPart());

        $this->realPart = $realPart;
        $this->imaginaryPart = $imaginaryPart;
    }

    /**
     * @param Complex $complex
     */
    public function div(Complex $complex)
    {
        $delta1 = ($this->getRealPart() * $complex->getRealPart()) +
            ($this->getImaginaryPart() * $complex->getImaginaryPart());

        $delta2 = ($this->getImaginaryPart() * $complex->getRealPart()) -
            ($this->getRealPart() * $complex->getImaginaryPart());

        $delta3 = ($complex->getRealPart() * $complex->getRealPart()) +
            ($complex->getImaginaryPart() * $complex->getImaginaryPart());

        $this->realPart = $delta1 / $delta3;
        $this->imaginaryPart = $delta2 / $delta3;
    }
}