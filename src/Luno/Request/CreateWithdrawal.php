<?php declare(strict_types=1);

namespace Luno\Request;

class CreateWithdrawal extends AbstractRequest
{
  /**
   * Amount to withdraw. The currency depends on the type.
   */
  protected $amount;

  /**
   * Withdrawal type.
   */
  protected $type;

  /**
   * The beneficiary ID of the bank account the withdrawal will be paid out
   * to. This parameter is required if you have multiple bank accounts. Your
   * bank account beneficiary ID can be found by clicking on the beneficiary
   * name on the <a href="/wallet/beneficiaries">Beneficiaries</a> page.
   */
  protected $beneficiary_id;

  /**
   * Optional unique ID to associate with this withdrawal. Useful to prevent
   * duplicate sends in case of failure. It supports all alphanumeric
   * characters, as well as "-" and "_".
   */
  protected $external_id;

  /**
   * For internal use.
   */
  protected $reference;
  
  /**
   * @return float
   */
  public function getAmount(): float
  {
    if (!isset($this->amount)) {
      return 0;
    }
    return $this->amount;
  }

  /**
   * @param float $amount
   */
  public function setAmount(float $amount)
  {
    $this->amount = $amount;
  }

  /**
   * @return string
   */
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }

  /**
   * @return string
   */
  public function getBeneficiaryId(): string
  {
    if (!isset($this->beneficiary_id)) {
      return "";
    }
    return $this->beneficiary_id;
  }

  /**
   * @param string $beneficiaryId
   */
  public function setBeneficiaryId(string $beneficiaryId)
  {
    $this->beneficiary_id = $beneficiaryId;
  }

  /**
   * @return string
   */
  public function getExternalId(): string
  {
    if (!isset($this->external_id)) {
      return "";
    }
    return $this->external_id;
  }

  /**
   * @param string $externalId
   */
  public function setExternalId(string $externalId)
  {
    $this->external_id = $externalId;
  }

  /**
   * @return string
   */
  public function getReference(): string
  {
    if (!isset($this->reference)) {
      return "";
    }
    return $this->reference;
  }

  /**
   * @param string $reference
   */
  public function setReference(string $reference)
  {
    $this->reference = $reference;
  }
}

// vi: ft=php
