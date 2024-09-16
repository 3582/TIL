<?php

class BankAccount
{
  public function __construct(
    private int $balance,
    private int $id,
    private int $transactionHistory
  ) {
    $this->balance = 0;
    $this->transactionHistory = [];
  }
}
