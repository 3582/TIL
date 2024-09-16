<?php

declare(strict_types=1);

use InvalidArgumentException;
use DateTime;

class BankAccount
{
  /** @var array<array{type: string, amount: float, date: DateTime}> */
  private array $transactionHistory;

  /**
   * @param int $id
   * @param float $balance
   * @param array<array{type: string, amount: float, date: DateTime}> $transactionHistory
   */
  public function __construct(
    private int $id,
    private float $balance = 0.0,
    array $transactionHistory = []
  ) {
    $this->transactionHistory = $transactionHistory;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getBalance(): float
  {
    return $this->balance;
  }

  /**
   * @return array<array{type: string, amount: float, date: DateTime}>
   */
  public function getTransactionHistory(): array
  {
    return $this->transactionHistory;
  }

  public function deposit(float $amount): void
  {
    if ($amount <= 0) {
      throw new InvalidArgumentException('Deposit amount must be greater than 0');
    }

    $this->balance += $amount;
    $this->transactionHistory[] = [
      'type' => 'deposit',
      'amount' => $amount,
      'date' => new DateTime()
    ];
  }

  public function withdraw(float $amount): void
  {
    if ($amount <= 0) {
      throw new InvalidArgumentException('Withdrawal amount must be greater than 0');
    }

    if ($amount > $this->balance) {
      throw new InvalidArgumentException('Insufficient funds');
    }

    $this->balance -= $amount;
    $this->transactionHistory[] = [
      'type' => 'withdraw',
      'amount' => $amount,
      'date' => new DateTime()
    ];
  }
}
