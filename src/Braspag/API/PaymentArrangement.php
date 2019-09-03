<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;

class PaymentArrangement implements BraspagSerializable
{
    /**
     * @var String
     */
    private $product;

    /**
     * @var String
     */
    private $brand;

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->product = isset($data->product) ? $data->product : '';
        $this->brand = isset($data->brand) ? $data->brand : '';
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    public function setProduct($product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setBrand($brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }
}
