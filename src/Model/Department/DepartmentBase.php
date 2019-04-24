<?php

namespace Nascom\TeamleaderApiClient\Model\Department;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class DepartmentBase
 *
 * @package Nascom\TeamleaderApiClient\Model
 */
abstract class DepartmentBase extends ModelBase
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $vatNumber;

    /**
     * @var string
     */
    private $currency;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}