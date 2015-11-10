<?php 

// create class
class BankAccount {
    // Property of class
    public $balance = 0;
    public $type = '';
    
    public function SetType($input) {
        $this->type = $input;    
    }
    
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

class SavingsAccount extends BankAccount {
}

$mahbub = new BankAccount;
$mahbub->SetType('18-25 Current');
$mahbub->Deposit(100);
$mahbub->Withdraw(20);

$mahbub_savings = new SavingsAccount;
$mahbub_savings->SetType('Super Saver');
$mahbub_savings->Deposit(3000);

echo $mahbub->type.' has '.$mahbub->DisplayBalance().'<br>';
echo $mahbub_savings->type.' has '.$mahbub_savings->DisplayBalance();

?>
