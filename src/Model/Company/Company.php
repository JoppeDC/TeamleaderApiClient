<?php

namespace Nascom\TeamleaderApiClient\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;

/**
 * Class Company
 *
 * @package Nascom\TeamleaderApiClient\Model\Company
 */
class Company extends CompanyBase
{
    /**
     * @var AddressWithType[]
     */
    private $addresses;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var LinkedCustomField[]
     */
    private $customFields;

    /**
     * @var boolean
     */
    private $marketingMailsConsent;

    /**
     * @return AddressWithType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param AddressWithType[] $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * @return bool
     */
    public function getMarketingMailsConsent()
    {
        return $this->marketingMailsConsent;
    }

    /**
     * @param bool $marketingMailsConsent
     */
    public function setMarketingMailsConsent($marketingMailsConsent)
    {
        $this->marketingMailsConsent = $marketingMailsConsent;
    }
}
