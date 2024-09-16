<?php

use BankAccount;
use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
  public function testBankAccountCreation(): void
  {
    $account = new BankAccount(1);
    $this->assertEquals(1, $account->getId());
    $this->assertEquals(0, $account->getBalance());
    $this->assertEmpty($account->getTransactionHistory());
  }
}
