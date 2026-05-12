<?php
include "librarydata.php";
?>

<?php
for($i=0;$i<count($library);$i++){
    $book = $library[$i];
//this is the final output where you can see the details of books
    echo "Library Management System" . "<br>" . "<br>";

    echo "Title: " . $book->bookTitle . "<br>";
    echo "Author: " . $book->author . "<br>";
    echo "Borrower: " . $book->borrowerName . "<br>";
    echo "Days Borrowed: " . $book->daysBorrowed . "<br>";
    echo "Status: " . $book->getStatus() . "<br>";
    echo "Late Fee: " . $book->calculateLateFee() . "<br>";
    echo "<br>";
}
?>