<?php
// ============================================
// Part D — Access Modifiers
// ============================================
// Lab: Introduction to Object-Oriented PHP
// Web Information Systems

class BankAccount
{
    public $ownerName;
    private $balance;

    function __construct($ownerName, $balance)
    {
        // Store the values
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    function showBalance()
    {
        // Display the balance
        echo "Balance: " . $this->balance;
    }
}

$account1 = new BankAccount(
    "Ahmad",
    5000
);

echo "Owner: " . $account1->ownerName . "<br>";
$account1->showBalance();

// NOTE: The following line would cause an error because $balance is private:
// echo $account1->balance;
?>
