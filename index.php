<?php 

// create class
class BankAccount {
    // Property of class
    public $balance = 10.5;
    
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
}

// new instance of class or object
$alex = new BankAccount;

// Withdraw 5
$alex->Withdraw(15);

// Displaying balance
echo $alex->DisplayBalance();

?>
