<?php 

// create class
class BankAccount {
    // Property of class
    public $balance = 0;
    
    // Method of class
    public function DisplayBalance() {
        return 'Balance: '.$this->balance;
    }
    
    public function Withdraw($amount) {
        if ($this->balance<$amount) {
            echo 'Not enough money.<br>';
        }else{
            $this->balance = $this->balance - $amount;    
        }
    }
    
    public function Deposit($amount) {
        $this->balance = $this->balance + $amount;    
    }
}

// new instances of class or object
$alex = new BankAccount;
$mahbub = new BankAccount;


// Deposit balance
$alex->Deposit(1000);
$mahbub->Deposit(500);

// Withdraw balance
$alex->Withdraw(500);
$mahbub->Withdraw(250);

// Displaying balance
echo $alex->DisplayBalance().'<br>';
echo $mahbub->DisplayBalance();

?>
