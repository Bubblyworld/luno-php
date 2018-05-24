<?php declare(strict_types=1);

namespace Luno\Response;

class ListUserTrades extends AbstractResponse
{
  protected $trades;
  
  /**
   * @return \Luno\Types\Trade[]
   */
  public function getTrades(): array
  {
    if (!isset($this->trades)) {
      return [];
    }
    return $this->trades;
  }

  /**
   * @param \Luno\Types\Trade[] $trades
   */
  public function setTrades(array $trades)
  {
    $this->trades = $trades;
  }
}

// vi: ft=php
