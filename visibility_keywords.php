<?php 

class BankAccount {
    private $balance = 3500;
    
    public function DisplayBalance() {
        return $this->balance;
    }
}

$alex = new BankAccount;
echo $alex->balance;

class MyAccount extends BankAccount {} 

$mahbub = new MyAccount;
echo '<br>'.$mahbub->balance;

?>