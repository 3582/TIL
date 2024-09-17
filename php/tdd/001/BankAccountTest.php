<?php

use PHPUnit\Framework\TestCase;
use Tdd\test001\BankAccount;

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
