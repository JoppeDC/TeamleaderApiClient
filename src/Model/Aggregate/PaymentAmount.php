<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PaymentAmount
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class PaymentAmount
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * PaymentAmount constructor.
     * @param float|null $amount
     * @param string|null $currency
     */
    public function __construct($amount = null, $currency = null)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
