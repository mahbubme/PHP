<?php 

class Example {
    
    public function __construct($text) {
        $this->SaySomething($text);        
    }
    
    public function SaySomething($something) {
        echo $something;    
    }
}

$example = new Example('This is constructor.');

?>