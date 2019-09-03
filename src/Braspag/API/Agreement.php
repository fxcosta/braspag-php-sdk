<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;

class Agreement implements BraspagSerializable
{
    /**
     * @var int
     */
    private $fee;

    /**
     * @var MerchantDiscountRates[]
     */
    private $merchantDiscountRates;

    /**
    * @param \stdClass $data
    */
    public function populate(\stdClass $data)
    {
        $this->fee = isset($data->Fee) ? $data->Fee : null;

        if (isset($data->MerchantDiscountRates)) {
            $this->address = new MerchantDiscountRates();
            $this->address->populate($data->MerchantDiscountRates);
        }
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    public function setFee($fee): self
    {
        $this->fee = $fee;

        return $this;
    }

    public function getFee()
    {
        return $this->fee;
    }

    public function setMerchantDiscountRates(array $merchantDiscountRates): self
    {
        $this->merchantDiscountRates = $merchantDiscountRates;

        return $this;
    }

    public function getMerchantDiscountRates()
    {
        return $this->merchantDiscountRates;
    }
}
