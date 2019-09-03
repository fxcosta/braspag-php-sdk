<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;

class BankAccount implements BraspagSerializable
{
    /** @var string $bank */
    private $bank;

    /** @var string $bankAccountType */
    private $bankAccountType;

    /** @var string $number */
    private $number;

    /** @var string $operation */
    private $operation;

    /** @var string $verifierDigit */
    private $verifierDigit;

    /** @var string $agencyNumber */
    private $agencyNumber;

    /** @var string $agencyDigit */
    private $agencyDigit;

    /** @var string $documentNumber */
    private $documentNumber;

    /** @var string $documentType */
    private $documentType;

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->bank = isset($data->bank) ? $data->bank : '';
        $this->bankAccountType = isset($data->bankAccountType) ? $data->bankAccountType : '';
        $this->number = isset($data->number) ? $data->number : '';
        $this->operation = isset($data->operation) ? $data->operation : '';
        $this->verifierDigit = isset($data->verifierDigit) ? $data->verifierDigit : '';
        $this->agencyNumber = isset($data->agencyNumber) ? $data->agencyNumber : '';
        $this->agencyDigit = isset($data->agencyDigit) ? $data->agencyDigit : '';
        $this->documentNumber = isset($data->documentNumber) ? $data->documentNumber : '';
        $this->documentType = isset($data->documentType) ? $data->documentType : '';
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    public function getBank()
    {
        return $this->bank;
    }

    public function setBank($bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }

    public function setBankAccountType($bankAccountType): self
    {
        $this->bankAccountType = $bankAccountType;

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function setOperation($operation): self
    {
        $this->operation = $operation;

        return $this;
    }

    public function getVerifierDigit()
    {
        return $this->verifierDigit;
    }

    public function setVerifierDigit($verifierDigit): self
    {
        $this->verifierDigit = $verifierDigit;

        return $this;
    }

    public function getAgencyNumber()
    {
        return $this->agencyNumber;
    }

    public function setAgencyNumber($agencyNumber): self
    {
        $this->agencyNumber = $agencyNumber;

        return $this;
    }

    public function getAgencyDigit()
    {
        return $this->agencyDigit;
    }

    public function setAgencyDigit($agencyDigit): self
    {
        $this->agencyDigit = $agencyDigit;

        return $this;
    }

    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    public function setDocumentNumber($documentNumber): self
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    public function getDocumentType()
    {
        return $this->documentType;
    }

    public function setDocumentType($documentType): self
    {
        $this->documentType = $documentType;

        return $this;
    }
}
