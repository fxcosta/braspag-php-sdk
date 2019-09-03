<?php

namespace Braspag\API;

use Braspag\API\BraspagSerializable;
use Braspag\API\Address;

class Subordinate implements BraspagSerializable
{
  /** @var BankAccount */
  private $bankAccount;

  /** @var Address */
  private $address;

  /** @var Agreement */
  private $agreement;

  /** @var Attachments */
  private $attachments;

  /** @var Notification */
  private $notification;

  /** @var string $corporateName */
  private $corporateName;

  /** @var string $fancyName */
  private $fancyName;

  /** @var string $documentNumber */
  private $documentNumber;

  /** @var string $documentType */
  private $documentType;

  /** @var string $MerchantCategoryCode */
  private $MerchantCategoryCode;

  /** @var string $contactName */
  private $contactName;

  /** @var string $contactPhone */
  private $contactPhone;

  /** @var string $mailAddress */
  private $mailAddress;

  /** @var string $website */
  private $website;

  /**
   * @param \stdClass $data
   */
  public function populate(\stdClass $data)
  {
    $this->corporateName = isset($data->corporateName) ? $data->corporateName : '';
    $this->fancyName = isset($data->fancyName) ? $data->fancyName : '';
    $this->documentNumber = isset($data->documentNumber) ? $data->documentNumber : '';
    $this->documentType = isset($data->documentType) ? $data->documentType : '';
    $this->MerchantCategoryCode = isset($data->MerchantCategoryCode) ? $data->MerchantCategoryCode : '';
    $this->contactName = isset($data->contactName) ? $data->contactName : '';
    $this->contactPhone = isset($data->contactPhone) ? $data->contactPhone : '';
    $this->mailAddress = isset($data->mailAddress) ? $data->mailAddress : '';
    $this->website = isset($data->website) ? $data->website : '';

    if (isset($data->Address)) {
      $this->address = new Address();
      $this->address->populate($data->Address);
    }

    if (isset($data->BankAccount)) {
      $this->bankAccount = new BankAccount();
      $this->bankAccount->populate($data->BankAccount);
    }

    if (isset($data->Agreement)) {
      $this->agreement = new Agreement();
      $this->agreement->populate($data->Agreement);
    }
    
    if (isset($data->Notification)) {
      $this->notification = new Notification();
      $this->notification->populate($data->Notification);
    }

    if (isset($data->Attachments)) {
      $this->attachments = new Attachment();
      $this->attachments->populate($data->Attachments);
    }
  }

  public function jsonSerialize()
  {
    return array_filter(get_object_vars($this));
  }

  public function getAttachment()
  {
    return $this->attachment;
  }

  public function setAttachment(array $attachments): self
  {
    $this->attachments = $attachments;

    return $this;
  }

  public function getAgreement()
  {
    return $this->agreement;
  }

  public function setAgreement(Agreement $agreement): self
  {
    $this->agreement = $agreement;

    return $this;
  }

  public function getNotification()
  {
    return $this->notification;
  }

  public function setNotification(Notification $notification): self
  {
    $this->notification = $notification;

    return $this;
  }

  public function getBankAccount()
  {
    return $this->bankAccount;
  }

  public function setBankAccount($bankAccount)
  {
    $this->bankAccount = $bankAccount;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getCorporateName()
  {
    return $this->corporateName;
  }

  public function setCorporateName($corporateName)
  {
    $this->corporateName = $corporateName;
  }

  public function getFancyName()
  {
    return $this->fancyName;
  }

  public function setFancyName($fancyName)
  {
    $this->fancyName = $fancyName;
  }

  public function getDocumentNumber()
  {
    return $this->documentNumber;
  }

  public function setDocumentNumber($documentNumber)
  {
    $this->documentNumber = $documentNumber;
  }

  public function getDocumentType()
  {
    return $this->documentType;
  }

  public function setDocumentType($documentType)
  {
    $this->documentType = $documentType;
  }

  public function getMerchantCategoryCode()
  {
    return $this->MerchantCategoryCode;
  }

  public function setMerchantCategoryCode($MerchantCategoryCode)
  {
    $this->MerchantCategoryCode = $MerchantCategoryCode;
  }

  public function getContactName()
  {
    return $this->contactName;
  }

  public function setContactName($contactName)
  {
    $this->contactName = $contactName;
  }

  public function getContactPhone()
  {
    return $this->contactPhone;
  }

  public function setContactPhone($contactPhone)
  {
    $this->contactPhone = $contactPhone;
  }

  public function getMailAddress()
  {
    return $this->mailAddress;
  }

  public function setMailAddress($mailAddress)
  {
    $this->mailAddress = $mailAddress;
  }

  public function getWebsite()
  {
    return $this->website;
  }

  public function setWebsite($website)
  {
    $this->website = $website;
  }
}
