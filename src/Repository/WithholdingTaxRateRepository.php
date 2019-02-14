<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\WithholdingTaxRate\WithholdingTaxRateListView;
use Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates\WithholdingTaxRatesListRequest;

/**
 * Class WithholdingTaxRateRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WithholdingTaxRateRepository extends RepositoryBase
{
    /**
     * @return WithholdingTaxRateListView[]
     * @throws \Http\Client\Exception
     */
    public function listWithholdingTaxRates()
    {
        $request = new WithholdingTaxRatesListRequest();

        return $this->handleRequest(
            $request,
            WithholdingTaxRateListView::class.'[]'
        );
    }
}
