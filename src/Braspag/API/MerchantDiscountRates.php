<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;

class MerchantDiscountRates implements BraspagSerializable
{
    /** @var PaymentArrangement[] */
    private $paymentArrangement;

    public function __construct($paymentArrangement = null)
    {
        $this->paymentArrangement = $paymentArrangement;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $items = [];

        if (isset($data->Items) && is_array($data->Items)) {
            foreach ($data->Items as $itemData) {
                $item = (new PaymentArrangement())->populate($itemData);
                $items[] = $item;
            }
        }

        $this->paymentArrangement = $items;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return PaymentArrangement[]
     */
    public function getPaymentArrangement(): array
    {
        return $this->paymentArrangement;
    }

    /**
     * @param PaymentArrangement[] $items
     * @return MerchantDiscountRates
     */
    public function setPaymentArrangement(array $paymentArrangement): self
    {
        $this->paymentArrangement = $paymentArrangement;
        
        return $this;
    }

    public function setInitialInstallmentNumber($initialInstallmentNumber): self
    {
        $this->initialInstallmentNumber = $initialInstallmentNumber;

        return $this;
    }

    public function getInitialInstallmentNumber()
    {
        return $this->initialInstallmentNumber;
    }

    public function setFinalInstallmentNumber($finalInstallmentNumber): self
    {
        $this->finalInstallmentNumber = $finalInstallmentNumber;

        return $this;
    }

    public function getFinalInstallmentNumber()
    {
        return $this->finalInstallmentNumber;
    }

    public function setPercent($percent): self
    {
        $this->percent = $percent;

        return $this;
    }

    public function getPercent()
    {
        return $this->percent;
    }
}
