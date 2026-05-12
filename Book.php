<?php
class Book{
    public $bookTitle;
    public $author;
    public $borrowerName;
    public $daysBorrowed;
    
    //this is so that the system know what variable is called
    public function __construct($bookTitle, $author, $borrower, $Days){
        $this->bookTitle=$bookTitle;
        $this->author=$author;
        $this->borrowerName=$borrower;
        $this->daysBorrowed=$Days;
    }
    public function calculateLateFee(){
        //this computes the fee after 7 days
        if($this->daysBorrowed<=7){
            return 0;
        }else if($this->daysBorrowed<=14){
            return ($this->daysBorrowed-7)*10;
        }else{
            return(7*10)+(($this->daysBorrowed-14)*20);
        }
    }

    public function getStatus(){
        // this function gets the status of the book
        if(empty($this->borrowerName)){
            return "Available";
        }else{
            return "Borrowed";
        }
    }
}
?>