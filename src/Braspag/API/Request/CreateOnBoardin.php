<?php

namespace Braspag\API\Request;

use Braspag\API\Sale;

class CreateOnBoardin extends AbstractRequest
{
    /**
     * @param Sale $sale
     *
     * @return Sale
     * @throws BraspagRequestException
     */
    public function execute($subordinate)
    {
        $apiUrl = $this->environment->getApiOnBord();

        $url = $apiUrl . 'api/subordinates/';

        return $this->sendRequest('POST', $url, $subordinate);
    }

    /**
     * @param $json
     *
     * @return Sale
     */
    protected function unserialize($json)
    {
        return Sale::fromJson($json);
    }
}
