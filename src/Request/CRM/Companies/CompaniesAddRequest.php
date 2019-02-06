<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Model\Company\Company;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesAddRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesAddRequest extends PostRequest
{
    public function __construct(array $company)
    {
        if (empty($company['business_type'])) {
            $company['business_type_id'] = $company['business_type']['id'];
        }

        unset($company['business_type']);
        unset($company['custom_fields']);

        $this->body = array_filter($company, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'companies.add';
    }
}
